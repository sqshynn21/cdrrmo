<?php
	$conn = new mysqli('localhost', 'root', '', 'sc');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>