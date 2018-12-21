<?php
class CoursCollectif extends Cours{
    private $libelle;  // libellé du cours collectif
    private $ageMaxi;
    private $nbPlacesMaxi;

   // constructeur
    public function __construct($unId,$unAgeMini,$unLibelle,$unAgeMaxi,$unNbPlacesMaxi){
        parent::__construct($unId,$unAgeMini);
        $this->libelle=$unLibelle;
        $this->ageMaxi=$unAgeMaxi;
        $this->nbPlacesMaxi=$unNbPlacesMaxi;
    }

   public function GetLibelle(){
	// retourne le libellé du cours collectif
   		return $this->libelle;
   }

   public function GetAgeMaxi(){
	return $this->ageMaxi;
   }

   public function GetNbPlacesMaxi(){
	return $this->nbPlacesMaxi;
   }

   public function Afficher()
   {
   	echo "<br>Cours collectif : <br>";
   	echo "id : ".$this->id;
   	echo "<br>Age minimum : ".$this->ageMini;
   	echo "<br>Libellé : ".$this->libelle;
   	echo "<br>Age maximum".$this->ageMaxi;
   	echo "<br>Nombre de places maximum : ".$this->nbPlacesMaxi."<br>";
   }
}
