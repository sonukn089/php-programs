<?php
	//echo phpinfo();

?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<h1>Register Form</h1>
	<h2>This your registration page:</h2>
	<form method="POST" action="insert.php">
		<table>
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td><input type="submit" value="Register"></td>
				<td><input type="reset" value="Reset"></td>
			</tr>
		</table>
	</form>

	
	<?php  include 'links.php'; ?>
		
</body>

</html>