<?php

#namespace repository;
require_once 'Repository.php';
require_once __DIR__ . '/../models/Excerpt.php';

class ExcerptRepository extends Repository
{
    public function getExcerpt(int $id): ?Excerpt
    {
        $stmt = $this->database->connect()->prepare("
        SELECT * FROM public.excerpts
        JOIN compositors ON id_compositor = compositors.id_compositor
        WHERE id = :id
        ");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $excerpt = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($excerpt == false) {
            return null;    #TODO nieodpowiedni zapis, powinien byc wyjatek exception i zabezpieczyc w try catch
        }

        return new User(
            $excerpt['title'],
            $excerpt['information'],
            $excerpt['image']
            #$excerpt['']
        );

    }

    public function addExcerpt(Excerpt $excerpt): void
    {
        $date = new DateTime();

        $stmt = $this->database->connect()->prepare("
        INSERT INTO public.excerpts (title, information, id_created_by, image)
        VALUES (?, ?, ?, ?) --:title, :information, :image
        ");

        $id_created_by = 1;     //TODO zrobić pobieranie id z sesji użytkownika

        $stmt->execute([
            $excerpt->getTitle(),
            $excerpt->getInformation(),
            #$excerpt->format('Y-m-d'),
            $id_created_by,
            $excerpt->getImage()
        ]);

//        $stmt->bindParam(':title', $excerpt->getTitle(), PDO::PARAM_STR);
//        $stmt->bindParam(':information', $excerpt->getInformation(), PDO::PARAM_STR);
//        $stmt->bindParam(':image', $excerpt->getImage(), PDO::PARAM_STR);

    }

    public function getExcerpts(): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare("
        SELECT * FROM public.excerpts
        ");
        $stmt->execute();
        $excerpts = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($excerpts as $excerpt) {
            $result[] = new Excerpt(
                $excerpt['title'],
                $excerpt['information'],
                $excerpt['image']);
        }

        return $result;
    }

}