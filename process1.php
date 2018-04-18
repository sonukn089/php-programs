<?php

	// echo "Name: ".$_POST['name']."</br>";
	// echo "email: ".$_POST['email']."</br>";
	// echo "adress: ".$_POST['adress']."</br>";
	// echo "password: ".$_POST['password']."</br>";
	// echo "cpassword: ".$_POST['cpassword'];
	
	if ($_POST('name')) {
		
		if ($_POST('email')) {
			
			if ($_POST('adress')) {
				
				if ($_POST('password')) {
					
					if ($_POST('cpassword')) {
						
						if ( $_POST('password') == $_POST('cpassword') ) {
							
							echo "Your form has been sent successfully";
						}
					}
				}
			}
		}
	}

?>

