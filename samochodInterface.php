<?php

interface SamochodInterface{

	public function helloSamochod();
	public function getModel();
	public function setModel($model); //set musi miec argumnt
	public function getMarka();
	public function setMarka($marka);
	public function getKolor();
	public function setKolor($kolor);
	public function getTyp();
	public function setTyp($typ);
}

interface SamochodWyscigowyInterface{
	public function getPredkoscMaksymalna();
	public function getPrzyspieszenie();
}

interface SilnikInterface{
	public function getMoc();
}


?>