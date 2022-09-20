<?php
  session_start();
  if(isset($_SESSION['user_login'])){
    header('location:home.php');
  }




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - Login</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/scclogo.png" />
    <script src="https://kit.fontawesome.com/787042df18.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<?php include 'includes/conn.php'; ?>
<body class="hold-transition skin-blue layout-top-nav login-page">

<nav>
        <img src="img/scclogo.png">    
        <ul>
        <li><a href="">CDRRMO</a></li>
        </ul>
    </nav>

	  
				
	  


    <div class="login">
      
          <form action="login_process.php" method="post">   
                <h3 class="title">Login</h3>    
            <div class="txt-field">
            <input type="text" name="user" id="user" required>
            <span></span>
            <label>Email</label>
            </div>
            <div class="txt-field">
            <input type="password" name="pass" id="pass" required>
            <span></span>
            <label>Password</label>
            </div>
            <!-- <div class="forgotpass">Forgot Password?</div> -->
            <input type="submit" value="Login" name="login" id="login">
        </div>
       
					<?php
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

					</form>
          <div class="wrapper">
            <div class="icon facebook">
                <div class="tooltip">Facebook</div>
                <span><a href="https://www.facebook.com/profile.php?id=100013206180116"><i class="fa-brands fa-facebook-f"></a></i></span>
            </div>
            <div class="icon gmail">
                <div class="tooltip">Gmail</div>
                <span><a href="cdrrmo_sccp@yahoo.com"><i class="fa-solid fa-envelope"></i></a></span>
            </div>
            <div class="icon twitter">
                <div class="tooltip">Twitter</div>
                <span><i class="fa-brands fa-twitter"></i></span>
            </div>
        </div>
        <br>
        <div class="all">
        <label>All Rights Reserved</label>
        </div>
            </form>
        </div>
</body>




