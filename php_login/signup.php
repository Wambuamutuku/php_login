<?php
session_start();

    include("connection.php");
    include("function.php");

   if($_SERVER['REQUEST_METHOD'] = "POST")

   //something was posted
   $username = $_POST['username'];
   $email = $_POST['email'];
   $password = $_POST['password'];

   if(!empty($username)&& !empty($email)&& !empty($password))   
   {

    //save to database
    $user_id = random_num(20);
    $query = "insert into users (user_id, username, email, password) values ('$user_id', '$username', '$email', '$password')";

    mysqli_query($con,$query);

    header("Location: login.php");
    die;
   }
   else{
    echo"please enter valid credentials";
   }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn_php</title>
</head>
<body>
   
    <form action="" method="POST">
    <h4>Register User</h4>
    <label >Username</label><br/>
    <input type="text" name="username"><br/>
    <label >Email</label><br/>
    <input type="text " name="email"><br/>
    <label >Password</label><br/>
    <input type="password" name="password"> <br/><br/>

    <input type="submit" value="sign up" width="100"><br><br/>
    <a href="login.php">Already have an account?</a>
    </form>
</body>
</html>