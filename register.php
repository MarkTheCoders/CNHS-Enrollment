<?php

include "db.php";

if (isset($_POST['register'])) {


    $username = mysqli_real_escape_string($connection,$_POST['username']);
    $email = mysqli_real_escape_string($connection,$_POST['email']);
    $password =  mysqli_real_escape_string($connection,$_POST['password']);
    $confirmpassword= mysqli_real_escape_string($connection,$_POST['cpassword']);



if(!empty($username) && !empty($email) && !empty($password)){


$sql = "SELECT * FROM accounts WHERE email =' $email'  ";
$check = mysqli_query($connection, $sql);
$result=mysqli_num_rows($check);
if($result > 0){
    echo "<script>alert('Email has already exists.')</script>";
}else{
                if ($password === $confirmpassword) {


        $passwordhash= password_hash($password, PASSWORD_DEFAULT);

        $sql="INSERT INTO `accounts`(`user_id`,`username`, `email`, `password`, `verified`, `verification_code`) VALUES ('','$username','$email','$passwordhash','','$verify')";
         $result=mysqli_query($connection,$sql);

                if($result){


                            header("Location: login.php");
       
                     }
             } else {
                     echo "<script>alert('password doesn't match')</script>";
                  }

 }
}
}
                             


?>



<!DOCTYPE html>

<html>
    <head>
        <title>CNHS||Register</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="cs/register.css">
        <link rel="icon" type="image/png" href="imgs/logo.png"/>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


        <!-- Font--->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>
      
        <div class="form">
            
            <center>
                <h2>Sign Up</h2>
                <p>Register your Email account.</p>
            </center>
               

                
           
            <form action="" method="post">
                
             
             
                
                <div class="input">
                        <label>Username</label>
                        <input type="text" name="username"  max="30" min="8"  placeholder="Username" required>
                </div>


                <div class="input">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Email" required>
                </div>
                 
                <div class="grid-details">
                                <div class="input">
                                    <label>Password</label>
                                     <input type='password' max="30" min="8" name='password' placeholder='Create Password' required pattern="[a-zA-Z'-'\s'">
                                </div>

                                <div class="input">
                                         <label>Confirm Password</label>
                                        <input type="password" max="30" min="8"  name="cpassword" placeholder="Confirm Password" required pattern="[a-zA-Z'-'\s'">
                                </div>
                </div>
                
                <div class="submit">
                    <input type="submit" value="REGISTER" name="register"  class="button">
                </div>


            </form>
            
            <div class="link">Already signed up?<a href="login.php">Login</a></div>
        </div>
        
 </section>

                <!--Bootsrap-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>