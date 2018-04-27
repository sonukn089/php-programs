
<?php
	require 'db.php';
	
	$result = mysql_query("SELECT * FROM users1");
?>
	<table width='60%' align='center' border=2>
		<tr>
			<td width='10%' align='center' bgcolor='FFFFFF'>ID</td>
			<td width='20%' align='center' bgcolor='FFFF00'>NAME</td>
			<td width='20%' align='center' bgcolor='FFFF00'>EMAIL</td>
			<td width='20%' align='center' bgcolor='FFFFFF'>PASSWORD</td>
		</tr>
<?php
	while ($row = mysql_fetch_array($result)) {
		
		$id = $row['id'];
		$name = $row['name'];
		$email = $row['email'];
		$password = $row['password'];
?>
		<tr>
			<td align='center'>
				<a href='edit.php?id=<?= $id; ?>&name=<?= $name ?>&email=<?= $email ?>&password=<?= $password ?>'><?= $id ?></a>
			</td>
			<td align='center'><?= $name ?></td>
			<td align='center'><?= $email ?></td>
			<td align='center'><?= $password ?></td>
		</tr>
<?php } ?>
	</table>

<?php mysql_close(); ?>