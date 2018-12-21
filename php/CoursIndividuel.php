<?php
class CoursIndividuel extends Cours{
   private $lInstrument; //instrument concerné par le cours individuel

    public function __construct($unId,$unAgeMini,$unInstrument){    // constructeur
    	parent::__construct($unId,$unAgeMini);
    	$this->lInstrument=$unInstrument;
    }
    public function GetLInstrument(){
    	return $this->lInstrument ;
    }

    public function GetLibelle(){
        // retourne le libellé du cours individuel qui est en fait l’intitulé  de l’instrument
    	return $this->lInstrument;
    }
    public function Afficher()
    {
    	echo "<br>Cours individuel : <br>";
    	echo "id : ".$this->id;
    	echo "<br>Age minimum : ".$this->ageMini;
    	echo "<br>Instrument : ".$this->GetLibelle()."<br>";
    }
}
