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
            background-image:url("https://ak8.picdn.net/shutterstock/videos/12450128/thumb/9.jpg");
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
        p{
            text-align:center;
            font-family: 'Source Serif Pro', serif;
            padding-bottom: 20px;
        }
        p a{
            margin-left:20px;
            color:red;
        }
            
    </style>
    <script>


    </script>
</head>
<body>

<?php

include "dbcon.php";
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $userid=$_POST['userid'];

    $user_search="select * from add_teacher where email='$email'";
    $query=mysqli_query($conn,$user_search);

    $email_count=mysqli_num_rows($query);

    if($email_count){
        $user_pass=mysqli_fetch_assoc($query);
        $user_id=$user_pass['id'];
         if($user_id === $userid){
             echo "login successfully";
             ?>
                <script>
                    location.replace("Teacherpage.php");
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
        <h1>Teacher Login</h1>
        <form action="TeacherLogin.php" method="post">
            <label>Email</label>
            <input type="text" name="email">
            <label>UserId</label>
            <input type="password" name="userid">
            <button type="submit" value="Submit" name="submit">Login</button>

        </form>
    </div>
</body>
</html>