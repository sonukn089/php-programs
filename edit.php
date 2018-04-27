<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
			$id 		= isset($_GET['id']) ? $_GET['id'] : '';
			$name 		= isset($_GET['name']) ? $_GET['name'] : '';
			$email 		= isset($_GET['email']) ? $_GET['email'] : '';
			$password 	= isset($_GET['password']) ? $_GET['password'] : '';
		?>
		<form method="post" action="">
			<table>
				<tr>
					<td> Name: </td>
					<td> <input type="text" name="name" value="<?= $name ?>"></td>
				</tr>
				<tr>
					<td> Email: </td>
					<td> <input type="text" name="email" value="<?= $email ?>"></td>
				</tr>
				<tr>
					<td> Password: </td>
					<td> <input type="text" name="password" value="<?= $password ?>"></td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" name="submit" value="Edit">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>