<?php
	include_once("connections/connection.php");

	
	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
	
	
	
		$sql = "SELECT * FROM admins WHERE username = '$username' ";
		$query = $conn->query($sql);
	
		if ($query->num_rows >= 1) {
	
			$row = $query->fetch_assoc();
			if(password_verify($password, $row['password'])){
				$_SESSION['admin'] = $row['id'];
				header('location:dashboard.php');

	
	
	
			}
	
			else{
				$_SESSION['error'] = 'Incorrect password';
				
			}
	
	
		} 
	
	
	else{
		$_SESSION['error'] = 'Cannot find account with the email';
	
	
	}

	
	}
			
	
	if(isset($_SESSION['error'])){
	  echo "
		<div class='alert alert-danger alert-dismissible'>
		  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
		  <h4><i class='icon fa fa-warning'></i> Error!</h4>
		  ".$_SESSION['error']."
		</div>
	  ";
	  unset($_SESSION['error']);
	}
	if(isset($_SESSION['success'])){
	  echo "
		<div class='alert alert-success alert-dismissible'>
		  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
		  <h4><i class='icon fa fa-check'></i> Success!</h4>
		  ".$_SESSION['success']."
		</div>
	  ";
	  unset($_SESSION['success']);
	}

	
	?>