<?php

	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	if ($name && $email && $password) {

		mysql_pconnect("localhost", "root", "") or die("We couldn't connect");

		mysql_select_db("testsite1");

		mysql_query("INSERT INTO users1(name, email, password)
			VALUES('$name', '$email', '$password')");

		$registered = mysql_affected_rows();

		echo "$registered was inserted";

	}	
  	else{

  		echo "You have to complete the form!";

	}
	



?>