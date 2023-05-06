<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    header("Location: home.php");    
}
if(isset($_POST["submit"])){
      $username = $_POST["username"];
       $password = $_POST["password"];
       $result = mysqli_query($conn,"SELECT * FROM customer WHERE UserName = '$username'");
        $row = mysqli_fetch_assoc($result);
        if(mysqli_num_rows($result) > 0){
            if($password == $row["CustomerPassword"]){
               $_SESSION["login"] = true;
               $_SESSION["id"] = $row["id"];
               header("Location: home.php");
                
            }
            else{
                echo
                 "<script>alert('Login Failed. Password Incorrect');</script>";
            }
        }
        else{
           echo 
                "<script>alert('Login Failed. No such user');</script>";
        }
}
?>


<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->

<html>
    <head>
        <meta charset="UTF-8">
       <title>Login - 99Speedmart</title>
    <style>
        body {
            background-color: #f7f7f7;
            font-family: Arial, sans-serif;
        }
        h2 {
            margin-top: 30px;
            margin-bottom: 20px;
            text-align: center;
            font-size: 28px;
            font-weight: bold;
            color: #333;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 30px;
            border: 1px solid #ccc;
            background-color: #fff;
            box-shadow: 0px 0px 10px #ccc;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-size: 16px;
            font-weight: bold;
            color: #333;
        }
/*        input[type="text"],
        input[type="password"] {*/
         input{  
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 16px;
            color: #333;
        }
        button[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: #2f9cb2;
            border: none;
            border-radius: 3px;
            font-size: 18px;
            font-weight: bold;
            color: #fff;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #257f92;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            font-size: 16px;
            color: #333;
            text-decoration: none;
        }
        a:hover {
            color: #257f92;
        }
    </style>
    </head>
    <body>
        <h2>99 Speedmart User-Login</h2>
        <form action="" method="POST">
        <label for="username">UserName:</label>
            <input type="" name="username" id="username" required value="" /><br/><br/>
              <label for="password">Password:</label>
            <input type="password" name="password" id="password" required value="" /><br/><br/>
             <button type="submit" name="submit">login</button><br/><br/>
             <div>
                 <a href="registration.php">Registration<a/>
                     <a href="changepass.php">Reset Password<a/>
                     <div/>
           </form>      
                 
                 
    </body>
</html>
