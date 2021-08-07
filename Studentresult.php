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
 










    <div class="container">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  your Marks
</button>
      <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Subject</th>
      <th scope="col">Semester</th>
      <th scope="col">Marks</th>

    </tr>
  </thead>
  <tbody>

  <?php
    include "dbcon.php";
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