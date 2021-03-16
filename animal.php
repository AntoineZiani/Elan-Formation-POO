<?php

class Animal {

    // Attributs ou variables d'instance ou propriétés
    // portée de variables : public, protected et private
    private $_nomAnimal;
    private $_race;
    private $_nbPattes;
    private $_dateNaissance;
    private $_aliments;
    private $_pointsDeVie;

    // Constructeur
    public function __construct($nomAnimal, $race, $nbPattes, $dateNaissance) {
        $this->_nomAnimal = $nomAnimal;
        $this->_race = $race;
        $this->_nbPattes = $nbPattes;
        $this->_dateNaissance = $dateNaissance;
        $this->_aliments = [];
        $this->_pointsDeVie = 100;
    }

    // Getters (accesseurs) et setters (mutateurs)
    public function getNomAnimal(){
        return $this->_nomAnimal;
    }

    public function getRace(){
        return $this->_race;
    }

    public function getNbPattes(){
        return $this->_nbPattes;
    }

    public function getDateNaissance(){
        return $this->_dateNaissance;
    }

    public function setNomAnimal($nomAnimal){
        $this->_nomAnimal = $nomAnimal;
    }

    public function setRace($race){
        $this->_race = $race;
    }

    public function setNbPattes($nbPattes){
        $this->_nbPattes = $nbPattes;
    }

    public function setDateNaissance($dateNaissance){
        $this->_dateNaissance->format("d-m-Y");
    }

    public function getPointsDeVie(){
        return $this->_pointsDeVie;
    }

    public function manger($aliment){
        $this->_aliment[] = $aliment;
    }

    public function attaquer(Animal $animal){
        $this->_pointsDeVie = $this->_pointsDeVie + 2;
        $animal->_pointsDeVie = $animal->_pointsDeVie - 2;
        echo $this->getNomAnimal()." a ".$this->getPointsDeVie()." points de vie<br/>";
        echo $animal->getNomAnimal()." a ".$animal->getPointsDeVie()." points de vie<br/>";
    }

    public function __toString(){
        return $this->getNomAnimal()." est de race ".$this->getRace().", possède ".
        $this->getNbPattes()." pattes et est né le ".$this->getDateNaissance()."<br/>";

    }
}