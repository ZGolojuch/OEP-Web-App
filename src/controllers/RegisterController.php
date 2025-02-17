<?php

require_once 'Repository/InstrumentRepository.php';

class RegisterController extends AppController
{
    private $instrumentRepository;

    public function __construct()
    {
        parent::__construct();
        $this->instrumentRepository = new InstrumentRepository();
    }

    public function register()
    {
        // Pobieranie listy instrumentów z repozytorium
        $instruments = $this->instrumentRepository->getInstruments();

        // Konwersja obiektów "Instrument" na zwykłą tablicę nazw
        $instrumentNames = array_map(function($instrument) {
            return $instrument->getName();
        }, $instruments);

        // Renderowanie widoku rejestracji z listą instrumentów
        $this->render('register', ['instruments' => $instrumentNames]);
    }
}