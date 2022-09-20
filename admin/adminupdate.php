<?php

include_once("connections/connection.php");


$id = $_GET['ID'];

$sql = "SELECT * FROM admins WHERE id = '$id'";
$admin = $conn->query($sql) or die($conn->error);
$row = $admin->fetch_assoc();

if(isset($_POST['submit'])){

    $fullname = $_POST['fullname'];
    $position = $_POST['position'];
    $contact = $_POST['contact'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "UPDATE admins SET fullname = '$fullname', position = '$position', contact = '$contact', username = '$username', password = '$password' WHERE id='$id'";

    $conn->query($sql) or die($conn->error);

    echo header("Location: admin.php");
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/x-icon" href="img/scclogo.png" />
    <link rel="stylesheet" href="css/form.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
  <button class="back"><a href="admin.php" class="text-white">Back</a></button>
    <div class="title">Update Admin Details</div>
    <div class="content">
      <form action="" method="post">
        <div class="user-details">
        <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="fullname" id="fullname" value="<?php echo $row['fullname'];?>">
          </div>
          <div class="input-box">
            <span class="details">Position</span>
            <input type="text" name="position" id="position" value="<?php echo $row['position'];?>">
          </div>
          <div class="input-box">
            <span class="details">Contact Number</span>
            <input type="text" name="contact" id="contact" value="<?php echo $row['contact'];?>">
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="username" id="username" value="<?php echo $row['username'];?>">
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" name="password" id="password" value="<?php echo $row['password'];?>">
          </div>
        </div>
        <div class="button">
          <input type="submit" name="submit" value="Update">
          
        </div>
      </form>
    </div>
  </div>

</body>
</html>
