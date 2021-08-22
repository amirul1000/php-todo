<?php
	$conn = new mysqli("localhost", "root", "secret", "todo");
	
	if(!$conn){
		die("Error: Cannot connect to the database");
	}
?>