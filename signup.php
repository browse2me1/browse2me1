<html>
    <head>
        <title>sign up</title>
        <link rel="stylesheet" href="styles.css" />
    </head>
    <body>
        <form action="" method="post">
            <?php//action is not defined because all files are in the same folder?>
            <label for="uname">username:</label>
            <input type="text" name="username" required>
            <label for="password">password:</label>
            <input type="password" name="pass" placeholder="password" required>
             <input type="submit" name="submit" value="Register"/>
        </form>
        <p>If you have an account    <a href="login.php">login</a>
    </body>
    </html>
    <?php
    include('db_con.php');
    $con=mysqli_connect("localhost","root","","php_db");
    if(isset($_POST["submit"])){
    $name=$_POST["username"];
    $password=$_POST["pass"];
   
    
    mysqli_query($con,"insert into histudents values('$name','','$password')");
    header("Location: login.php");
    }
    ?>