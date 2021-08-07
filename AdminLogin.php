<?php 
session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:#FDD2BF;
            font-family:'Roboto',sans-serif;
            background-image:url("https://www.cumbria.ac.uk/media/Stock-Image-Study-Group.jpg");
            background-position:center;
            background-size:cover;
            background-repeat:no-repeat;
            height:800px;
        }  
        .container{
            position:absolute;
            top:20%;
            left:30%;
            background-color:white;
                width:600px;
                height:50%;
                margin-bottom:50px;
                border-radius:3px;
                

        } 
        h1{
            text-align: center;
            padding-top:18px;
        } 
        form label{
            display:flex;
            margin-top:20px;
            margin-left:30px;
            font-size:19px;
        } 
        form input{
            width:80%;
            padding:7px;
            margin-left:30px;
            border:none;
            border:1px solid grey;
            border-radius:6px;
            outline:none;
        } 
        button{
            width:400px;
            height:35px;
            text-align:center;
            margin-top:20px;
            margin-left:100px;
            border:none;
            background-color:#49c1a2;
            color:white;
            
        }
            
    </style>
    <script>


    </script>
</head>
<body>

        <?php

        include "dbcon.php";
        if(isset($_POST['submit'])){
            $username=$_POST['username'];
            $password=$_POST['password'];

            $user_search="select * from Admin_table where username='$username'";
            $query=mysqli_query($conn,$user_search);

            $email_count=mysqli_num_rows($query);

            if($email_count){
                $user_pass=mysqli_fetch_assoc($query);
                $pass=$user_pass['password'];
                 if($pass === $password){
                     echo "login successfully";
                     ?>
                        <script>
                            location.replace("Adminpage.php");
                        </script>
                    <?php
                 }else{
                    ?>
                    <script>
                        alert("password incorrect");
                    </script>
            
                    <?php
                 }
            }else{
                echo "invalid email";
            }
        }







        ?>
    <div class="container">
        <h1>Admin Login</h1>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
            <label>Username</label>
            <input type="text" name="username">
            <label>Password</label>
            <input type="password" name="password">
            <button type="submit" value="submit" name="submit">submit</button>

        </form>
    </div>
</body>
</html>