<?php

	function printName($number, $min, $max, $dimention) {
		if ($number >= 1 && $number <= 100) {
			

			while ($number != 0) {

				$print = rand($min,$max);

				if ($min >= -100 && $max <= 200 )  {
					
					if ($dimention == 2) {
						
						echo "[ ".$print. " ," .$print. "]";
					}
					elseif ($dimention == 3) {

						echo "[ ".$print. " ," .$print. " ," .$print." ]";
					}
					else{

						echo "Wrong dimention!";
					}
				}
				else{

					echo "Wrong Input! Please correct input";
				}

				$number--;
			}
		}
		else{

			echo "intput the number between 1 to 100";
		}

	}

	printName(100, -100,200,2);

	// 	

?>