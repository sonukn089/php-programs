<!DOCTYPE html>
<html>
<head>
	<title>GET POST</title>
</head>
<body>

	<form method="POST" action="processform.php">
	<!-- <form method="GET" action="processform.php"> -->
		
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
				<td></td>
				<td><input type="submit" name="submit" value="Send"></td>
			</tr>
		</table>

	</form>

</body>
</html>