<?php

#namespace repository;
#require_once 'Database.php';
require_once __DIR__.'/../../Database.php';

class Repository
{
    protected $database;

    public function __construct()
    {
        $this->database = new Database();   //TODO TU mozna zrobic SINGLETON
    }
}