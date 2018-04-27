<!DOCTYPE html>
<html>
<head>
	<title>Question</title>
</head>
<body>
	<form method="POST" action="insert_data.php">
		<h1>Write Your Question</h1>
		<table>
			<tr>
				<td>
					<select>
						<option>Select Subject</option>
						<option>Hindi</option>
						<option>English</option>
						<option>Math</option>
						<option>Physics</option>
						<option>Chemistry</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Type Your Question</td>
				<td><textarea></textarea>Questions</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit"></td>
			</tr>
		</table>

	</form>

</body>
</html>