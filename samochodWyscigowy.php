<?php

class SamochodWyscigowy extends Samochod implements SamochodWyscigowyInterface{
	

	private $silnik;
	public function SamochodWyscigowy(Silnik $a){
		$this->silnik=$silnik;

	}
	public function getPredkoscMaksymalna(){
		return $this->getPredkoscMaksymalna;
	}

	public function getPrzyspieszenie(){
		return $this->getPrzyspieszenie;
	}


}









?>