<?php

	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	// if ($name && $email && $password) {
	// }	
 //    else{
	// }
	
	$servername = "localhost";
	$username = "";
	$password = "";
	$dbname = "users1";

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$users1");
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $sql = "SELECT * FROM users1";
	    // use exec() because no results are returned
	    $conn->exec($sql);
	    echo "New record created successfully";
	    }
	catch(PDOException $e)
	    {
	    echo $sql . "<br>" . $e->getMessage();
	    }

	$conn = null;


?>