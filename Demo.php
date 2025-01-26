<?php
    session_start();
    if(isset($_SESSION['username'])){
        $name=$_SESSION['username'];
        echo "<h1>Welcome <em style=color:blue;>$name</em>, to Our website</h1>";
    }
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>Demo website</title>
    <link rel="stylesheet" href="styles.css" />
    <style>
        h1{
            background-color: chocolate;

        }
        a{
            background-color: rgb(196, 214, 198);
            color:blue;
            font-weight:bold;
            border-radius: 5px;
            text-decoration: none;
        }
       
       div li{
            display: inline;
            text-align:right;
        }
        img{
            height: 40px;
            width:5%;
            float:left;
            margin: bottom 100px;
        }
        h2,hr,section{
            margin-bottom:80px;
        }
        
    </style>
</head>
<body>
    
    
    <div class="logo">
        <img src="logo.png.png" alt="logo" >
        <ul>
        <li><a href="Demo.php">Home</a></li>
        <li><a href="About.PHP">About us</a></li>
        <li><a href="page.php">website vs webpage</a></li>
        <li><a href="signup.php">sign up</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="index.php">suggestion</a></li>
        
    </ul>
</div>
  <h2>steps to access our website.</h2>
  <ul>
    <li>Register into our website by sign up.</li><br>
    <li>next login by providing your username and password correctly</li><br>
    <li>finally you can access every pages</li><br>


  </ol>
<section>
    <a href="signup.php">Logout</a>
    </section>
    <hr>
   
</body>
</html>
