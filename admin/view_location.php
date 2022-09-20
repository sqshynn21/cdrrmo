<?php

if(!isset($_SESSION)){
    session_start();
  }

include_once("connections/connection.php");


$sql = "SELECT * FROM admins ORDER BY id DESC";
$admin = $conn->query($sql) or die($conn->error);
$row = $admin->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="img/scclogo.png" />
    <title>CDRRMO - Dashboard</title>
    <link rel="stylesheet" href="css/dash.css">
    <link rel="stylesheet" href="css/location.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/787042df18.js" crossorigin="anonymous"></script>
    
</head>
<body>
    <div class="sidebar">
        <div class="side-brand">              
            <img src="img/scclogo.png" alt="">
        </div>
        <div class="side-menu">
        <ul>
                <li>
                    <a href="dashboard.php" ><i class="fa-solid fa-grip"></i>
                    <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="evacuation.php" ><i class="fa-solid fa-person-walking-arrow-right"></i>
                    <span>Evacuation</span>
                    </a>
                </li>

                <li>
                    <a href="location.php" class="active"><i class="fa-sharp fa-solid fa-location-pin"></i>
                    <span>Location</span>
                    </a>
                </li>

                <li>
                    <a href="user.php"><i class="fa-solid fa-users"></i>
                    <span>Users</span>
                    </a>
                </li>
                <li>
                    <a href="admin.php"><i class="fa-solid fa-circle-user"></i>
                    <span>Account</span>
                    </a>
                </li>
                <li>
                    <a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>
                    <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-content">
        <header>
            <div class="header-title">
                <h1>
                <i class="fa-solid fa-location-dot"></i>
                Keep their track
                </h1>
            </div>
            
        </header>
        <div class="con">
        <div class="left">
<?php
        $ID = $_GET['ID'];
        $view = "SELECT * from location where id = '$ID'";
        $result = $conn->query($view);
        $row = $result->fetch_assoc();
                    ?>
 
<form method="POST" style ="position:relative; right:40px; padding-top:0;">
    <p>
        <label>View the Location of <br> <?php echo $row['name']?></label><br>
        <input type="hidden" name="latitude" value="<?php echo $row['lat'];?>" >
    </p>
 
    <p>
        <input type="hidden" name="longitude" value="<?php echo $row['long'];?>">
    </p>
 
    <input type="submit" name="submit_coordinates" value="View " style ="margin-left:10px;">
</form>
        </div>


        <div class="right" >
   
<?php
    if (isset($_POST["submit_coordinates"]))
    {
        $latitude = $_POST["latitude"];
        $longitude = $_POST["longitude"];
        ?>
 
        <iframe  style="width:80%;position:relative; top:20px; left:50px;"src="https://maps.google.com/maps?q=<?php echo $latitude; ?>,<?php echo $longitude; ?>&output=embed"></iframe>
 
        <?php
    }
?>
        </div>
    </div>

</body>
</html>