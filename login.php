
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="styles.css" />
    <style>
        
       h4{
            color:red;
        }
        em{
            margin-bottom:80px;
        }
        
    </style>
</head>
<body>
    <h1>Login Page</h1>
    <em>To test our website please creat database,  tabel <b>[histudents]</b> and insert into it
by a  <a href="signup.php">signup</a> form.</em>
    <form action="" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit" name="login">Login</button>
            
    </form>
    <p>  or create account    <a href="signup.php">sign up</a></p>
   
</body>
</html>
<?php
  session_start();
  include('db_con.php');
    //$con=mysqli_connect("localhost","root","","php_db");
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name=$_POST["username"];
        $password=$_POST["password"];

    
    if(isset($_POST["login"])){
    $name=$_POST["username"];
    $password=$_POST["password"];
   
    
}
$query="select  * from histudents WHERE NAME='$name' AND  PASSWORD='$password'";
$result= $con->query($query);
if($result->num_rows==1 && $_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST["username"];
    $_SESSION['username']=$name;
    header("Location: Demo.php");
}
else{
   echo '<h4><strong> the correct password or username is required to login!</strong></h4>';
    //exist();
   
}

$con->close();
    }
    
?>