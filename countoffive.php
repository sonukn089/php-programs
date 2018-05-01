<?php

	function countFive($five) {

		$n = array(20,5,7,35,5,25,10,5,5,20,5,7,10,5,25,5,50,5,5,30);

		$five = 0;

		for ($i=0; $i<20; $i++) { 
			
			//echo $n[$i]."<br/>";

			if ($n[$i] == 5) {
			
				$five++;
				
			}

		}
		echo "Five number is : ".$five;
			

	}
	countFive(20);


?>