<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign_up page</title>
    <style>
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
        .btn{
            display: block;
            margin: auto;
            padding: 6px 30px;
            margin-bottom: 5px;
            width: fit-content;
            cursor: pointer;
            /*max-width:150px;*/
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
        <h1>SIGN UP</h1>
        <form action="" method="POST">
            <input type="text" name="first_name" id="" placeholder="First Name"> <br><br>
            <input type="text" name="last_name" id="" placeholder="Last Name"> <br><br>
            <input type="email" name="email" placeholder="Email"> <br><br>
            <input type="text" name="user_name" placeholder="UserName"> <br><br>
            <input type="password" name="password" placeholder="Password"><br><br>

            <button class="btn"  type="submit">Submit</button>
            <a class="btn" href="login.php">LogIn</a>
        </form>
    </div>

</body>
</html>