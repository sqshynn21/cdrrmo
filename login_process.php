<?php
	session_start();
	include 'includes/conn.php';
	if(isset($_POST['login'])){
		$user = $_POST['user'];
		$pass = $_POST['pass'];
	
	
		$sql = "SELECT * FROM users WHERE user = '$user' ";
		$query = $conn->query($sql);
	
		if ($query->num_rows >= 1) {
	
			$row = $query->fetch_assoc();
			if(password_verify($pass, $row['pass'])){
				$_SESSION['user_login'] = $row['id'];
					header('location:home.php');
	
	
	
			}
	
			else{
				$_SESSION['error'] = 'Incorrect password';
				
			}
	
	
		} 
	
	
	else{
		$_SESSION['error'] = 'Cannot find account with the email';
	
	
	}

	
	}
			
	
	header('location: index.php');
	
	?>