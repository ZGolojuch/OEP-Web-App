<?php

#namespace repository;
require_once 'Repository.php';
require_once __DIR__ . '/../models/User.php';

class UserRepository extends Repository
{
    public function getUser(string $email): ?User
    {
        $stmt = $this->database->connect()->prepare("
        SELECT * FROM public.users
        JOIN roles ON users.id_role = roles.id_role
        JOIN user_details ON users.id_user = user_details.id_user_details
        WHERE email = :email
        ");
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            return null;    #TODO nieodpowiedni zapis, powinien byc wyjatek exception i zabezpieczyc w try catch
        }

        return new User($user['email'],
            $user['password'],
            $user['name'],
            $user['surname']
        );

    }

}