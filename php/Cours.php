<?php 
// classe abstraite Cours
abstract class Cours{
    protected $id;
    protected $ageMini;
    protected $lesJours;  // collection des jours où a lieu le cours

    //  j'ai enlevé le contructeur

	abstract protected function Afficher();

}
