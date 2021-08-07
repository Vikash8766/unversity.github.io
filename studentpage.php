<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</head>
<body>
<div class="container" style="text-align:center;">
    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Your Class Roll NO</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post" >
        <div class="mb-3">
  <label class="form-label">Roll NO</label>
  <input type="text" class="form-control" name="rollno">
</div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

<button type="submit" name="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-top:50px; text-align:center;">
  Enter Your Roll No
</button>
</div>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Student_Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Class Roll_No</th>
      <th scope="col">course</th>

    </tr>
  </thead>
  <tbody>

  <?php
    include "dbcon.php";
      $q="select * from st_table";
      $query=mysqli_query($conn,$q);
      while($res=mysqli_fetch_array($query)){

    ?>
    <tr>
      <th scope="row"><?php echo $res['username']; ?></th>
      <td><?php echo $res['email']; ?></td>
      <td><?php echo $res['mobile']; ?></td>
      <td><?php echo $res['rollno']; ?></td>
      <td><?php echo $res['course']; ?></td>

    </tr>
    <?php
      }
      ?>
    
  </tbody>
</table>



</body>
</html>