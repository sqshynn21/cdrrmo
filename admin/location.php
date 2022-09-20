<?php

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
    <title>CDRRMO - Admin Account</title>
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
                    <a href="evacuation.php"><i class="fa-solid fa-person-walking-arrow-right"></i>
                    <span>Evacuation</span>
                    </a>
                </li>

                
                <li>
                    <a href="location.php"  class="active"><i class="fa-sharp fa-solid fa-location-pin"></i>
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
                Admin Account
                </h1>
               
            </div>
        </header>
        <div class="grid">
            <br>
            <div class="table">
        <div class="header">
            <p>Admin Details</p>
           
            <form action="adminsearch.php" method="get">
            <div class="search">
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                <input type="search" name="search" id="search" placeholder="Search">  
            </div>
            </form>
            <div class="add">
            
                <button><a href="adminadd.php"><i class="fa-solid fa-plus"></i> Add</a></button>
            </div>
        </div>
        <div class="table">
            <table>
                <thead>
                    <tr>
                    <th>Name</th>
                    <th>User Location</th>
                    <th>Latitude</th>
                    <th>longhitude</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $sql = "SELECT * FROM location";
                    $query = $conn->query($sql);
                    $data = array();
                    while($row = $query->fetch_assoc()){?>
                <tr>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['address'];?></td>
                    <td><?php echo $row['lat'];?></td>
                    <td><?php echo $row['long'];?></td>
                    <td>
                    
                        <button class="view"><a href="view_location.php?ID=<?php echo $row['id'];?>"><i class="fa-solid fa-eye"></i></a></button>
                        <button class="delete" type="submit" name="delete"><a href="admindelete.php?id=<?php echo $row['id'];?>"><i class="fa-solid fa-trash"></i></a></button>
   
                
                    </td>
                </tr>
                <?php } ?>
               </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>
</body>
</html>