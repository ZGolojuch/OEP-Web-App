<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/Excerpt.php';
require_once __DIR__ .'/../repository/ExcerptRepository.php';

class ExcerptController extends AppController
{
    const MAX_FILE_SIZE = 1024*1024;
    const SUPPORTED_TYPES = ['image/png', 'image/jpeg'];
    const UPLOAD_DIRECTORY = '/../public/uploads/';

    private $messages = [];

    private $excerptRepository;

    public function __construct(){
        parent::__construct();
        $this->excerptRepository = new ExcerptRepository();
    }

    public function excerpts() {
        $excerpts = $this->excerptRepository->getExcerpts();
        $this->render('excerpts', ['excerpts' => $excerpts]);
    }

    public function addExcerpt()
    {
        if ($this->isPost() && is_uploaded_file($_FILES['file']['tmp_name']) && $this->validate($_FILES['file'])) {
            move_uploaded_file(
                $_FILES['file']['tmp_name'],
                dirname(__DIR__).self::UPLOAD_DIRECTORY.$_FILES['file']['name']
            );

            $excerpt = new Excerpt($_POST['title'], $_POST['information'], $_FILES['file']['name']);
            $this->excerptRepository->addExcerpt($excerpt); // created new excerpt object and saved it in database

            return $this->render('excerpts', [
                'excerpts' => $this->excerptRepository->getExcerpts(),
                'messages' => $this->messages
            ]);
        }
        return $this->render('add-excerpt', ['messages' => $this->messages]);
    }

    public function search()
    {
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

        if($contentType === 'application/json') {
            $content = trim(file_get_contents('php://input'));
            $decoded = json_decode($content, true);

            header('Content-Type: application/json');
            http_response_code(200);
            echo json_encode($this->excerptRepository->getExcerptByTitle($decoded['search']));
        }
    }

    private function validate(array $file): bool
    {
        if ($file['size'] > self::MAX_FILE_SIZE) {
            $this->messages[] = 'File is too large for destination file system.';
            return false;
        }

        if (!isset($file['type']) || !in_array($file['type'], self::SUPPORTED_TYPES)) {
            $this->messages[] = 'File type is not supported.';
            return false;
        }
        return true;
    }

}