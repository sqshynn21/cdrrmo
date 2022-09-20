
<?php include 'includes/session.php';?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - Dashboard</title>
    
    
    <script>
        //  philipwalton.com/articles/the-google-analytics-setup-i-use-on-every-site-i-build
        window.ga = window.ga || function() {
          (ga.q = ga.q || []).push(arguments);
        };
        ga('create', 'UA-33848682-1', 'auto');
        ga('set', 'transport', 'beacon');
        ga('send', 'pageview');
        </script>
        <script async src="https://www.google-analytics.com/analytics.js"></script>
        <meta name="description" content="Simplest possible examples of HTML, CSS and JavaScript.">
        <meta name="author" content="//samdutton.com">
        <link rel="stylesheet" href="css/dash.css">
        <link rel="shortcut icon" type="image/x-icon" href="img/scclogo.png" />
        <meta itemprop="name" content="simpl.info: simplest possible examples of HTML, CSS and JavaScript">
<meta itemprop="image" content="/images/icons/icon192.png">
<meta id="theme-color" name="theme-color" content="#fff">
        <script src="https://kit.fontawesome.com/787042df18.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>

    <nav>
          
        <ul>
        <li><a href="">CDRRMO</a></li>
        
        <img src="https://kpopping.com/documents/ac/0/EXO_1023_5.webp?v=f189a"> 
        <i class="fa-solid fa-bell"></i>
        <a href="logout.php" style="color:black;"><i class="fa-solid fa-power-off"></i></a>
        </ul>
       
    </nav>
    <div id="container">

        <h1>Your Current Location</h1>

        <div class="evacuate location" >
        <button>Detect your location</button>


<script src="detect/script.js"></script>
        </div>
      
      </div>
    <div class="login">


            <form action="user_location.php" method="post">  
            
            <center>
            <input type="hidden" style="width:500px;" value="<?php echo $user['fname']. ' '.$user['lname'];?>" name="name"><br>
            <input type="hidden" style="width:500px;" value="Send Location" name="address" id="input"><br>
            <input type="hidden" style="width:500px;"  value="Send Location" name="lat" id="lat"><br>
            <input type="hidden" style="width:500px;" value="Send Location" name="long" id="long">
            </center>

            <input onclick="return confirm('Are you sure you want to Send Your Location?')"  type="submit" value="Send Location" name="submit" id="login">
    
        <div class="evacuate">
            <button><a href="evacuation.php">Evacuation Center</a></button>
        </div>
          
            <div class="all">
        <label>Message Us</label>
        </div>
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
        
    </form>
    </div>
</body>
</html>

<style>

.location{
margin-top:50px;
    position:relative; 
    left:450px; 
    width:400px;
    cursor: pointer;
  font-weight: 500;
  background: #fff;
  box-shadow: 0 0 20px 0 rgba(0,0,0,0.1);
}


@media(max-width: 684px){
 .location{
    position:relative;
    left:40px; 
    width:350px;
}

</style>