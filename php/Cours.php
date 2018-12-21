<?php 
// classe abstraite Cours
abstract class Cours{
    protected $id;
    protected $ageMini;
    protected $lesJours;  // collection des jours où a lieu le cours

    public function __construct($unId,$unAgeMini){   // constructeur
        $this->id=$unId;
        $this->ageMini=$unAgeMini;
        $this->lesJours=array(); // c'est une collection
    }

	abstract protected function Afficher();

}
