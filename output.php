<?php

	mysql_connect("localhost", "root", "") or die("Problem with connection");

	mysql_select_db("testsite1");

	$result = mysql_query("SELECT * FROM users1");

	while ($row = mysql_fetch_array($result)) {
		
		echo $row['name']." ".$row['email']." ".$row['password'];

		echo "<br>";
	}

	mysql_close();

?>
<?php  include 'links.php'; ?>