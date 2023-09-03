<?php include('db.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Dashboard</title>
</head>
<style>
 
  form{
    background-image: linear-gradient(to right , rgb(255, 255, 255) , #f7cccc);
  }
.sidebar {
    margin-top:30%;
  margin: 0;
  padding: 0;
  width: 300px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {

  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: rgb(131, 55, 55);
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
    margin-top:20px;
  margin-left: 300px;
  padding: 1px 16px;
}
.table{
  margin-left:300px;
  padding:20px;
  width:85%;

}
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 10px;
  }
  .table{
    margin-left:50px;
  }
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
<body>
<nav class=" navbar navbar-expand-lg navbar-light bg-light navbar-fixed">
    <div class="container-fluid">
<a class="navbar-brand" href="dashboard.php" >Admin Dashboard</a>

<div class="collapse navbar-collpase" id="navbarNav">
</div>
</div>
</nav>
            <div class="sidebar">
  <a class="active" href="career.php">Jobs</a>
  <a href="candidate.php">Candidate applied</a>
  <a href="contact.php">Contact</a>
  <a href="about.php">About</a>
  <a href="logout.php">Logout</a>
</div>
<div class="content">
<p>
 
 <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
   Post job
 </button>
</p>
<div class="collapse" id="collapseExample">
 <div class="card card-body">
 <form action="" method="post">

    <div class="mb-3">
      <label for="Company Name" class="form-label">Company Name</label>
      <input type="text" class="form-control" id="" name="cname" >
</div>
<div class="mb-3">
      <label for="exampleInputPosition" class="form-label">Position</label>
      <input type="text" class="form-control" id="exampleInputPosition" name="pos">
</div>
<div class="mb-3">
      <label for="JobDesc" class="form-label">Job Description</label>
      <input type="text" class="form-control" id="JobDesc" name="jobDesc">
</div>
<div class="mb-3">
      <label for="skills" class="form-label">Skills Required</label>
      <input type="text" class="form-control" id="skills" name="skills">
</div>
<div class="mb-3">
      <label for="CTC" class="form-label">CTC</label>
      <input type="text" class="form-control" id="CTC" name="CTC">
</div>
<button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

   </div>
</div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
  
  <?php
  $sql="Select cname,position,CTC from jobs";
  $result=mysqli_query($conn,$sql);
  $i=0;
  if($result->num_rows>0){
    while($rows=$result->fetch_assoc()){
 
  echo"
  <tbody>
  <tr>
  <td>".++$i."</td>
  <td>".$rows['cname']."</td>
  <td>".$rows['position']."</td>
  <td>".$rows['CTC']."</td>";
}}
else{
  echo"";
}
  ?>
  </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
