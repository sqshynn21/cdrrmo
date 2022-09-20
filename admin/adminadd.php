<?php

include_once("connections/connection.php");


if(isset($_POST['submit'])){

    $fullname = $_POST['fullname'];
    $position = $_POST['position'];
    $contact = $_POST['contcontactact'];
    $username = $_POST['username'];
    $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);


    $sql = "INSERT INTO `admins`(`fullname`, `position`, `contact`, `username`, `password`) VALUES ('$fullname','$position','$contact','$username','$password')";

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
    <div class="title">Add Admin</div>
    <div class="content">
      <form action="" method="post">
        <div class="user-details">
        <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="fullname" id="fullname" placeholder="Full Name" required>
          </div>
          <div class="input-box">
            <span class="details">Position</span>
            <input type="text" name="position" id="position" placeholder="Position" required>
          </div>
          <div class="input-box">
            <span class="details">Contact Number</span>
            <input type="text" name="contact" id="contact" placeholder="Contact Number" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="username" id="username" placeholder="Username" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" name="password" id="pass" placeholder="Password" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="submit" value="Add">
          
        </div>
      </form>
    </div>
  </div>

</body>
</html>
