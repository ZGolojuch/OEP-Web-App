<?php

//namespace models;

class User
{
    private $email;
    private $password;
    private $name;          //TODO zlaczenie na user_details zeby dzialalo
    private $surname;

    public function __construct(string $email,string $password,string $name,string $surname)
    {
        $this->email = $email;
        $this->password = $password;
        $this->name = $name;
        $this->surname = $surname;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function getPassword()
    {
        return $this->password;
    }

}