<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/Instrument.php';

class InstrumentRepository extends Repository
{
//    public function getInstrument(string $name): ?Instrument
//    {
//        $stmt = $this->database->connect()->prepare("
//        SELECT * FROM public.instruments
//        ");
//        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
//        $stmt->execute();
//
//        $name = $stmt->fetch(PDO::FETCH_ASSOC);
//
//        if ($name == false) {
//            return null;    #TODO nieodpowiedni zapis, powinien byc wyjatek exception i zabezpieczyc w try catch
//        }
//
//        return new Instrument($name['name']);
//
//    }

    private $instruments = [];

    public function getInstruments(): array
    {
        $stmt = $this->database->connect()->prepare("SELECT * FROM public.instruments");
        $stmt->execute();

        $instruments = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Przekształcamy wyniki w tablicę obiektów Instrument
        $result = [];
        foreach ($instruments as $instrument) {
            $result[] = new Instrument($instrument['name']);
        }

        return $result;
    }


}