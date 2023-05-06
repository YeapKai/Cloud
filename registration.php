<?php
require 'config.php';
//check session
if(!empty($_SESSION["id"])){
    header("Location: home.php");    
}
if(isset($_POST["submit"])){
   $name = $_POST["name"];
     $username = $_POST["username"];
       $email = $_POST["email"];
         $password = $_POST["password"];
            $confirmpassword = $_POST["confirmpassword"];
            $duplicate = mysqli_query($conn, "SELECT * FROM customer WHERE UserName = '$username' OR CustomerEmail = '$email'");
            if(mysqli_num_rows($duplicate)>0){
                echo
                "<script>alert('Username or Email Has Already Taken');</script>";
                
            }
            else{
                if($password == $confirmpassword)
                {
                 $query = "INSERT INTO customer VALUES('','$name','$password','$email','$username')";   
                 mysqli_query($conn,$query);
                 echo
                 "<script>alert('Registration successfully');</script>";
                }      
                else{
                  echo
                 "<script>alert('Password does not match');</script>";
                }
            }
    
}

?>

<html>
    <head>
        <title>Registration - 99Speedmart</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f7f7f7;
            }
            
            h2 {
                color: #333;
                 text-align: center;
            }
            
            form {
                margin: 0 auto;
                width: 37%;
                background-color: #fff;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
            }
            
/*            label {
                display: inline-block;
                width: 30%;
                margin-bottom: 10px;
            }
            

            input{
                width: 60%;
                padding: 10px;
                border: none;
                border-radius: 5px;
                box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.1);
                margin-bottom: 10px;
            }*/

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
            width: 90%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 16px;
            color: #333;
        }
            
            button[type="submit"] {
/*                background-color: #4CAF50;*/
                background-color: #2f9cb2;
                color: #fff;
                border: none;
                border-radius: 5px;
                padding: 10px 20px;
                cursor: pointer;
                display: block;
                margin: 0 auto;
            }
            
            button[type="submit"]:hover {
                /*background-color: #3e8e41;*/
                 background-color: #257f92;
            }
            
            a {
                display: block;
                margin-top: 10px;
                text-align: center;
                color: #999;
                font-size: 14px;
                text-decoration: none;
            }
            
            a:hover {
                color: #257f92;
            }
        </style>
    </head>
    <body>
       
        <h2>Registration</h2>
        <form method="POST" action="">
             
            <label for="name">Real Name:</label>
            <input type="text" name="name" id="name" required value="" /><br/><br/>
             <label for="username">UserName:</label>
            <input type="" name="username" id="username" required value="" /><br/><br/>
             <label for="email">Email:</label>
            <input type="" name="email" id="email" required value="" /><br/><br/>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required value="" /><br/><br/>
            <label for="confirmpassword">Confirm Password:</label>
            <input type="password" name="confirmpassword" id="confirmpassword" required value="" /><br/><br/>
            <button type="submit" name="submit">Register</button><br/>
            <a href="index.php" style="display: inline-block; margin-left: 10px; font-weight: bold">Login</a>
        </form>
    </body>
</html>





