<?php

include_once("connections/connection.php");


$id = $_GET['ID'];

$sql = "SELECT * FROM evacuations WHERE id='$id'";
$area = $conn->query($sql) or die($conn->error);
$row = $area->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CDRRMO - Evacuation</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/scclogo.png" />
    <link rel="stylesheet" href="css/dash.css">
    <link rel="stylesheet" href="css/table.css">
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
                    <a href="dashboard.php"><i class="fa-solid fa-grip"></i>
                    <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="evacuation.php" class="active"><i class="fa-solid fa-person-walking-arrow-right"></i>
                    <span>Evacuation</span>
                    </a>
                </li>

                <li>
                    <a href="location.php"><i class="fa-sharp fa-solid fa-location-pin"></i>
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
                <i class="fa-solid fa-user-gear"></i>
                Evacuation
                </h1>
               
            </div>
        </header>
        <button class="back" style="width: 70px; height: 40px; margin-bottom:20px;background:rgb(4, 134, 67);"><a href="evacuation.php" style="color: white;">Back</a></button>

        <div class="grid">
           
        <div class="header">   
        </div>
        <div class="table">
            <table>
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Evacuation</th>
                    <th>Location</th>
                    <th>Point Person</th>
                    <th>Phone</th>
                    <th>Status</th>
                   
                    </tr>
                </thead>
                <tbody>
  
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['location'];?></td>
                    <td><?php echo $row['point_person'];?></td>
                    <td><?php echo $row['number'];?></td>
                    <td><?php echo $row['status'];?></td>
                    
                </tr>
               
               </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>
</body>
</html>