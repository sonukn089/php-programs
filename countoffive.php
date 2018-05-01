<?php

	$n = array(5,20,30,5,56,5);

	function countFive($arr) {

		$five = 0;

		for ($i=0; $i<count($arr); $i++) { 
			
			//echo $n[$i]."<br/>";

			if ($arr[$i] == 5) {
			
				$five++;
				
			}

		}
		echo "Five number is : ".$five;
			

	}

	countFive($n);


?>