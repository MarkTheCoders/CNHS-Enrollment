<?php
include "db.php";
session_start();
 
 if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email=$_POST["email"];
    $password=$_POST["password"];

 

 
$sql = "SELECT * FROM accounts WHERE email =' $email' AND password ='$password' ";
$check = mysqli_query($connection, $sql);

if($check){
header("Location: form.php");
}
if($email=="Admin@gmail.com" && $password=="admin123"){
    header("Location: Dashboard.php");
 }
}

?>



<!DOCTYPE html>

<html>
    <head>
        <title>CNHS||Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="cs/register.css">
        <link rel="icon" type="image/png" href="imgs/logo.png"/>
         <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <div class="form">
            
            <center>
            <h2>Login</h2>
            <p>Login your registered account.</p>
            </center>
            
            <form action="" method="post" >
                
         
                <div class="input">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Email" required>
                </div>    
                
             
                <div class="input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder=" Password" required pattern="[a-zA-Z'-'\s'">
                </div>  
                
                
                
                <div class="submit">
                    <input type="submit" value="Login" name="login" class="button">
                </div>
            </form>
            
            <div class="link">Don't have account?<a href="register.php">Sign up</a></div>
        </div>
    </body>
</html>
