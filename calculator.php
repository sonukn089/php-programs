<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>

	<form method="get">
		<table>
			<h2>Calculator</h2>
			<tr>
				<td><input type="text" name="num1" placeholder="number1"></td>
				<td><input type="text" name="num2" placeholder="number2"></td>
				<td>
					<select name="operator" required="true">
						<option>None</option>
						<option>Add</option>
						<option>Subtract</option>
						<option>Multiply</option>
						<option>Divide</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><button type="submit" name="submit" value="submit">Calculate</button></td>
			</tr>	
		</table>	
	</form>
	<p>The answer is: </p>

	<?php

		if (isset($_GET['submit'])) {
			
			$result1 = $_GET['num1'];
			$result2 = $_GET['num2'];
			$operator = $_GET['operator'];

			switch ($operator) {
				case 'None':
					echo "ERROR: You need to select a method"; break;

				case 'Add':
					echo $result1 + $result2; break;
				
				case 'Subtract':
					echo $result1 - $result2; break;

				case 'Multiply':
					echo $result1 * $result2; break;

				case 'Divide':
					echo $result1 / $result2; break;					
			}
		}

	?>
	<hr>
	<?php

		$dayofweek = date("w");

		switch ($dayofweek) {
			case 0:
				echo "Today is monday"; break;

			case 1:
				echo "Today is monday"; break;

			case 2:
				echo "Today is Tuesday"; break;
			
			case 3:
				echo "Today is Wednesday"; break;

			case 4:
				echo "Today is Thursday"; break;

			case 5:
				echo "Today is Friday"; break;

			case 6:
				echo "Today is Saturday"; break;		
		}

	?>

</body>
</html>