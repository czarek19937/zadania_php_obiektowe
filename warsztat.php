<?php

include_once('samochod.php');
include_once('silnik.php');
include_once('samochodWyscigowy.php');

				/*$mojSamochod = new Samochod();
				$mojSamochod->Samochody('Seat','Ibiza','czarny','sedan');
				echo $mojSamochod->helloSamochod();
				$innySamochod = new Samochod();
				$innySamochod->Samochody('Ford','Escort','zielony','hatchback');
				echo $innySamochod->helloSamochod();
				echo $innySamochod->kolorSamochod();
				$innySamochod->Samochody('Ford','Escort','czerwony','hatchback');
				echo $innySamochod->helloSamochod();

				
				

				function otoSamochod(Samochod $s){
					$opis="otoSamochod".$s->getMarka()."\n";
					return $opis;
				}

				$samochod = new Samochod();
				$samochod->otoSamochod($marka);
				echo otoSamochod($samochod);
*/
				$mojSamochod = new Samochod('Seat','Ibiza','czarny','sedan');
				echo $mojSamochod->helloSamochod();
				
				$innySamochod = new Samochod("Ford", "Escort", "Czerwony", "Sedan");
				echo $innySamochod->helloSamochod();

				function otoSamochod(Samochod $s){
					$opis="otoSamochod ".$s->getMarka()."\n";
					return $opis;
				}

            
				echo otoSamochod($mojSamochod);
				echo otoSamochod($innySamochod);


				//$liczba_aut = Samochod::$licznik;
				//echo $liczba_aut



?>