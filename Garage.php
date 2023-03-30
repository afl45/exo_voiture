<?php

class Garage {

    private string $nom_garage;
    private $garage = array();

    public function __construct($nom_garage) {
            $this->nom_garage = $nom_garage;
    }
    
    public function add_garage($labagnole) {
        $this->garage[] = $labagnole;
    }
    
    public function affiche_garage() {
        foreach($this->garage as $car) {
            echo $car->getBrand().'<br>';
            echo $car->getModel().'<br>';
            echo $car->getFuel().'<br>';
            echo $car->getSpeed().'<br>';
            echo $car->getAuto().'<br>';
        }
    }
}

?>