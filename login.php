<?php
session_start();
    include 'connection.php';
    include 'functions.php';
   
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
       //read from database
       $email= $_POST['email'];
       $password=$_POST['password'];
    
        if(!empty($email ) && !empty($password) )
        {
          
            $query="select * from users where email = '$email'  limit 1";
            
            $result=mysqli_query($con,$query);
            if($result)
            {
                if($result && mysqli_num_rows($result) > 0 )
                {
                    $user_data =mysqli_fetch_assoc($result);
                    if($user_data['password'] == $password)
                    {
                        $_SESSION['user_id'] = $user_data['user_id'];
                        header("Location:index.php");
                        die;
                    }
                }                
            }
            echo "invalid username or password";
        }else{
            echo "Please enter some valid information";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style >
    body{
            background-image: url("background.jpeg");
            background-repeat: no-repeat;
            background-size: cover;
        }
        .form{
            background-color: lightslategrey;
            border-radius:5px;
            width: 300px;
            padding: 20px;
            margin: auto;
            text-align: center;
        }
        .form input{
            padding:5px 5px;
            border-radius: 5px;
            border: none;
            outline: none;

        }
        h1{
            color:white;
        }
        a{
            text-decoration: none;
        }
        .form button{
            width:110px;
        }
        .btn{
            display: block;
            margin: auto;
            padding: 6px 30px;
            margin-bottom: 5px;
            width: max-content;
            cursor: pointer;
            max-width:150px;
            color: black;
            border: 1px solid black;
            border-radius: 10px;
            background-color: white;
        }
        .btn:hover{
            background-color: lightslategrey;
            color: white;
        }
    </style>    
</head>
<body>
    <div class="form ">
        <h1>LOGIN</h1>
        <form  method="POST">
            <input type="email" name="email" placeholder="Email"> <br><br>
            <input type="password" name="password" placeholder="Password"><br><br>

            <input   type="submit" value="Login" class="btn">
            <a class="btn" href="signup.php" >Signup</a>

        </form>
    </div>    
</body>
</html>