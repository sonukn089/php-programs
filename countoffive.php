<?php

	function countFive($five) {

		$n = array(20,5,7,10,5,25,5,50,54,20,5,7,10,5,25,5,50,54,20,30);

		$five = 0;

		for ($i=0; $i<=20; $i++) { 
			
			if ($n[$i] == 5) {
				
				$five++;

				echo $five;
					
			}
			else{

				echo "Not found of number five";
			}
		}
	}
	countFive(20);


?>