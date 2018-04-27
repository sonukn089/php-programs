<!DOCTYPE html>
<html>
<head>
	<title>FORM</title>
</head>
<body>
	
	<form method="POST" action="process.php">
		
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
				<td>Number:</td>
				<td><input type="text" name="number"></td>
			</tr>
			<tr>
				<td>Country:</td>
				<td>
					<select>
						<option>Country:</option>
						<option>India</option>
						<option>New Zeland</option>
						<option>England</option>
						<option>South Africa</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>City:</td>
				<td>
					<select>
						<option>Select City:</option>
						<option>Kanpur</option>
						<option>Lucknow</option>
						<option>Delhi</option>
						<option>Patna</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Adress:</td>
				<td><input type="text" name="adress"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>Image:</td>
				<td><input type="file" name="fileToUpload" id="fileToUpload"></td>
			</tr>
			<tr>
				<td><input type="submit" name="btn" value="1"></td>
				<td><input type="submit" name="btn" value="delete"></td>
			</tr>
		</table>

	</form>

</body>
</html>

