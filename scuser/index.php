<?php

include_once("connections/connection.php");

$conn = connection();

if(isset($_POST['login'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM users WHERE user = '$user' AND pass = '$pass'";

    $user = $conn->query($sql) or die ($conn->error);
    $row = $user->fetch_assoc();
    echo $total = $user->num_rows;

    if($total > 0){

        $_SESSION['UserLogin'] = $row['user'];

        echo $_SESSION['UserLogin'];

        echo header("Location: dashboard.php");
    }
    else{
        echo "Not Found!";
    }
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
<body>
    <nav>
        <img src="img/scclogo.png">    
        <ul>
        <li><a href="">CDRRMO</a></li>
        </ul>
    </nav>

        <div class="login">
            <form action="" method="post">   
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
       
        <!-- <div class="reg">
            Not registered? <a href="#">Register Here</a>
        </div> -->

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
</html>