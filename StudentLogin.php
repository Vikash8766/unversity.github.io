


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
            margin:0px;
        }
        .container{
            position:absolute;
            top:50%;
            left:32%;
            bottom:50%;
            background-color:white;
                width:500px;
                height:350px;;
                padding-top:0px;
                border-radius:3px;
                margin:auto;


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
            width:200px;
            height:35px;
            text-align:center;
            margin-top:20px;
            margin-left:130px;
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

        include 'dbcon.php';
        if(isset($_POST['submit'])){
            $username=$_POST['username'];
            $password=$_POST['password'];

            $user_search="select * from st_table where email='$username'";
            $query=mysqli_query($conn,$user_search);

            $email_count=mysqli_num_rows($query);

            if($email_count){
                $user_pass=mysqli_fetch_assoc($query);
                $pass=$user_pass['password'];

                //$pass_decode=password_verify($password,$pass);
                 if($pass==$password){
                     echo "login successfully";
                     ?>
                        <script>
                            location.replace("Studentpage.php");
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
        <h1>Student Login</h1>
        <form action="StudentLogin.php" method="post">
            <label>Username</label>
            <input type="text" name="username">
            <label>Password</label>
            <input type="password" name="password">
            <button type="submit" value="submit" name="submit">Login</button>

        </form>
        <p>New User?<a href="StudentRegister.php">Register</a></p>
    </div>
    
</body>
</html>