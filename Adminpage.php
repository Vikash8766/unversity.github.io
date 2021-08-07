<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</head>
<body>
  <?php

    include "dbcon.php";

    //to add student
    if(isset($_POST['submit'])){
      $username=$_POST['username'];
      $email=$_POST['email'];
      $mobile=$_POST['mobile'];
      $roll=$_POST['rollno'];
      $course=$_POST['course'];
      $semester=$_POST['semester'];

      $emailQuery="select * from add_student where email='$email'";
            $query=mysqli_query($conn,$emailQuery);

            $emailCount=mysqli_num_rows($query);

            if($emailCount>0){
                echo "email already exists";
            }else{

                    $insertQuery="INSERT INTO  add_student (username,email,mobile,rollno,course,semester) 
                    values ('$username','$email','$mobile','$roll','$course','$semester')";
                    $result=mysqli_query($conn,$insertQuery);
                    if($result){
                        ?>
                        <script>
                            alert("insert successfully");
                            </script>
    
                        <?php
                    }else{
                        ?>
                        <script>
                            alert("insertion failed");
                            </script>
    
                        <?php
                    }

                }
               
            

    }


    
    ?>



<div class="container" style="margin-top:40px;">
  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add  New Student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="Adminpage.php" method="post">
    <div class="modal-body">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">student_name</label>
    <input type="text" class="form-control" name="username">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Email address</label>
    <input type="email" class="form-control" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label  class="form-label">Mobile</label>
    <input type="text" class="form-control" name="mobile">
  </div>
  <div class="mb-3">
    <label  class="form-label">class Roll No</label>
    <input type="text" class="form-control" name="rollno">
  </div>
  <div class="mb-3">
    <label  class="form-label">Course</label>
    <input type="text" class="form-control" name="course">
  </div>
  <div class="mb-3">
    <label  class="form-label">semester</label>
    <input type="text" class="form-control" name="semester">
  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit">Add</button>
      </div>
  </form>
    </div>
  </div>
</div>






    <div class="container">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add New Student
</button>
      <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Student_Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Class Roll_No</th>
      <th scope="col">course</th>
      <th scope="col">Semester</th>

    </tr>
  </thead>
  <tbody>

  <?php
      $q="select * from add_student";
      $query=mysqli_query($conn,$q);
      while($res=mysqli_fetch_array($query)){

    ?>
    <tr>
      <th scope="row"><?php echo $res['username']; ?></th>
      <td><?php echo $res['email']; ?></td>
      <td><?php echo $res['mobile']; ?></td>
      <td><?php echo $res['rollno']; ?></td>
      <td><?php echo $res['course']; ?></td>
      <td><?php echo $res['semester']; ?></td>

    </tr>
    <?php
      }
      ?>
  </tbody>
</table>

</div>





 
</form>
</div>

<div class="container" style="margin-top:40px;">
<button type="button" class="btn btn-primary"><a href="AddTeacher.php" style="color:white;">Add Teacher</a></button>

  </div>



</body>
</html>