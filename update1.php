<?php

	mysql_connect("localhost", "root", "") or die("Problem with connection");

	mysql_select_db("testsite1");

	$result = mysql_query("SELECT * FROM users1");

	echo "<table width=\"90%\" align=center border=2>";

	echo "<tr><td width=\"40%\" align=center bgcolor=\"FFFFFF\">ID</td>
	<td width=\"40%\" align=center bgcolor=\"FFFF00\">NAME</td>
	<td width=\"40%\" align=center bgcolor=\"FFFF00\">EMAIL</td>
	<td width=\"40%\" align=center bgcolor=\"FFFFFF\">PASSWORD</td></tr>";

	while ($row = mysql_fetch_array($result)) {
		
		$id = $row['id'];
		$name = $row['name'];
		$email = $row['email'];
		$password = $row['password'];

		echo "<tr><td algin=center>
		<a href=\edit.php?id=$id & name=$name & email=$email & password=$password\">$id</a></td>
		<td>$name</td>
		<td>$email</td>
		<td>$password</td></tr>";
	}
	echo "</table>";

	mysql_close();

?>