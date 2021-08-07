<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/56c232d0be.js" crossorigin="anonymous"></script>
    <style>
        *{
            padding:0;
            margin:0;
            box-sizing:border-box;
        }
        div.container{
            align-items:center;
            
        }
        .login{
            text-align:center;
            padding:50px;
            margin-top:30px;
            margin-left:30%;
            width:50%;
            margin-bottom:30px;
            border:1px solid grey;
            border-radius:10px;
        }
        
        button{
            display:block;
            border:none;
            outline:none;
            border-radius:0;
            font-size:25px;
        }
        #l1{
            background-color:rgb(76, 66, 223);
        }
        #l2{
            background-color:rgb(24, 219, 66);

        }
        #l3{
            background-color:rgb(228, 19, 19);
        }
        #l4{
            background-color:#1E6F5C;

        }
        a{
            color:black;
            text-decoration: none;
            position:absolute;
            left:50%;
        }
        button{
            border:none;
            outline:none;
            border-radius:0;
            margin-top:50px;

        }
        
    </style>
</head>
<body>
    <div class="container">
        <form>
        <div class="login" id="l1">
            <i class="fas fa-user fa-5x"></i>
            <button type="submit"><a href="StudentRegister.php">Registeration Login</a></button>
        </div>
        <div class="login" id="l2">
            <i class="fas fa-user fa-5x"></i>
            <button type="submit"><strong><a href="StudentLogin.php">Student Login</a></strong></button>
        </div>
        <div class="login" id="l3">
            <i class="fas fa-user fa-5x"></i>
            <button type="submit"><strong><a href="TeacherLogin.php">Teacher Login</a><strong></button>
        </div>
        <div class="login" id="l4">
            <i class="fas fa-user fa-5x"></i>
            <button type="submit"><strong><a href="AdminLogin.php">Admin Login</a></strong></button>
        </div>
    </form>
    </div>
</body>
</html>