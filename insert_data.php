<?php

	$subt = $_POST['sub'];

		mysql_pconnect("localhost", "root", "") or die("We couldn't connect");

		mysql_select_db("school");

		mysql_query("INSERT INTO subject(subject)
			VALUES('$subt')");

		$subt = mysql_affected_rows();

		echo "$subt was inserted";

	
	
		mysql_close();
	



?>