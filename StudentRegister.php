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
        }  
        .container{
            background-color:white;
                width:700px;
                height:100%;
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
            width:400px;
            height:35px;
            text-align:center;
            margin-top:20px;
            margin-left:130px;
            border:none;
            background-color:#49c1a2;
            color:white;
            
        }
        select{
            padding:7px;
            margin-left:30px;
            width:82%;
            font-size:14px;
            border-radius:3px;
            
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
            $username=$_POST['username'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $cpassword=$_POST['cpassword'];
            $mob=$_POST['mobile'];
            $roll=$_POST['rollno'];
            $course=$_POST['select1'];
            $gender=$_POST['select2'];

          //  $pass=password_hash($password,PASSWORD_DEFAULT);
          //  $cpass=password_hash($cpassword,PASSWORD_DEFAULT);
            
            $emailQuery="select * from st_table where email='$email'";
            $query=mysqli_query($conn,$emailQuery);

            $emailCount=mysqli_num_rows($query);

            if($emailCount>0){
                echo "email already exists";
            }else{
                if($password === $cpassword){

                    $insertQuery="INSERT INTO  st_table (username,email,password,cpassword,mobile,rollno,course,gender) 
                    values ('$username','$email','$password','$cpassword','$mob','$roll','$course','$gender')";
                    $result=mysqli_query($conn,$insertQuery);
                    if($result){
                        ?>
                        <script>
                            alert("Register successfully");
                            </script>
    
                        <?php
                    }else{
                        ?>
                        <script>
                            alert("insertion failed");
                            </script>
    
                        <?php
                    }

                }else{
                    echo "password do not match";
                }
               
            }

        }


        ?>

   

    <div class="container">
        <h1>Register</h1>
        <form action="StudentRegister.php" method="post">
            <label>Username</label>
            <input type="text" name="username">
            <label>Email</label>
            <input type="email" name="email">
            <label>Password</label>
            <input type="password" name="password">
            <label>Confirm Password</label>
            <input type="password" name="cpassword">
            <label>Mobile No</label>
            <input type="tel" name="mobile">
            <label>Class Roll No</label>
            <input type="text" name="rollno">
            <label>Course</label>
            <div class="Select">
                <select name="select1">
                <option value="">Select</option>
                <option vaue="">BTECH</option>
                <option value="">MTECH</option>
                </select>
            </div>
            <label>Gender</label>
            <div class="Select">
                <select name="select2">
                <option value="">Select</option>
                <option vaue="">Male</option>
                <option value="">Female</option>
                </select>
            </div>
            <button type="submit" value="submit" name="submit">submit</button>

        </form>
        <p>Already a member?<a href="StudentLogin.php">Login</a></p>
    </div>
</body>
</html>