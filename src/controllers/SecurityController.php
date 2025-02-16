<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/User.php';
require_once __DIR__ .'/../repository/UserRepository.php';

class SecurityController extends AppController
{
    public function login()
    {

        $userRepository = new UserRepository();

        if(!$this->isPost()) {
            return $this->login('login');
        }

        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $userRepository->getUser($email);

        if (!$user) {
            return $this->render('login', ['messages' => ['User not exists']]);
        }

        #tego chyba nie musi byc
        if ($user->getEmail() !== $email) {
            return $this->render('login', ['messages' => ['User with this email not exists']]);
        }

        if ($user->getPassword() !== $password) {
            return $this->render('login', ['messages' => ['Wrong password']]);
        }

        //return $this->render('excerpts');
        //alternatywa - lepsze bo pokazuje wtedy /excerpts
        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: $url/excerpts");

    }
}