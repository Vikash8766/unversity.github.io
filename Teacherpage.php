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

    //to add student result
    if(isset($_POST['submit'])){
      $sub=$_POST['subject'];
      $name=$_POST['studentname'];
      $roll=$_POST['rollno'];
      $sem=$_POST['sem'];
      $marks=$_POST['marks'];

                    $insertQuery="INSERT INTO  result (subject,studentname,rollno,semester,marks) 
                    values ('$sub','$name','$roll','$sem','$marks')";
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


    
    ?>



<div class="container" style="margin-top:40px;">
  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enter Student Marks</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="Teacher.php" method="post">
    <div class="modal-body">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Subject</label>
    <input type="text" class="form-control" name="subject">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Student Name</label>
    <input type="text" class="form-control" name="studentname">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label  class="form-label">Class Roll No</label>
    <input type="text" class="form-control" name="rollno">
  </div>
  <div class="mb-3">
    <label  class="form-label">Semester</label>
    <input type="text" class="form-control" name="sem">
  </div>
  <div class="mb-3">
    <label  class="form-label">Marks</label>
    <input type="text" class="form-control" name="marks">
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
  Enter Student Marks
</button>
      <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Subject</th>
      <th scope="col">Student_Name</th>
      <th scope="col">Roll No</th>
      <th scope="col">Semester</th>
      <th scope="col">Marks</th>

    </tr>
  </thead>
  <tbody>

  <?php
      $q="select * from result";
      $query=mysqli_query($conn,$q);
      while($res=mysqli_fetch_array($query)){

    ?>
    <tr>
      <th scope="row"><?php echo $res['subject']; ?></th>
      <td><?php echo $res['studentname']; ?></td>
      <td><?php echo $res['rollno']; ?></td>
      <td><?php echo $res['semester']; ?></td>
      <td><?php echo $res['marks']; ?></td>

    </tr>
    <?php
      }
      ?>
  </tbody>
</table>

</div>





 
</form>
</div>





</body>
</html>