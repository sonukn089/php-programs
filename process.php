<?php

	if($_POST['btn'] === '1')
		echo 'I am going to edit the value';

	else if($_POST['btn'] == 'delete')
		echo 'I am going to delete this value';
	
	else
		echo 'nothing';

?>