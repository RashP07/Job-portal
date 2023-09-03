<?php include('db.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>candidates</title>
</head>
<style>
     

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
 
  .table{
  margin-left:50px;
 margin-top:30px;

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
<a class="navbar-brand" href="#" >Candidate Dashboard</a>


</div>
</nav>
 <div class="sidebar">
  <a class="active" href="career.php">Jobs</a>
  <a href="candidate.php">Candidate applied</a>
  <a href="contact.php">Contact</a>
  <a href="about.php">About</a>
  <a href="logout.php">Logout</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Candidate Name</th>
      <th scope="col">Position</th>
      <th scope="col">Year passout</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $sql="Select name,apply,year from candidates";
  $result=mysqli_query($conn,$sql);
  $i=0;
  if($result->num_rows>0){
    while($rows=$result->fetch_assoc()){
 
  echo'
  <tr>
  <th scope="row">'.++$i.'</td>
  <td>'.$rows['name'].'</td>
  <td>'.$rows['apply'].'</td>
  <td>'.$rows['year'].'</td>";
  </tr>';
}}
else{
  echo"";
}
  ?>
  
  </tbody>
</table>
</body>
</html>