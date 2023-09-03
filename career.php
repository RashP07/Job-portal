<?php include('db_c.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
 </head>
<style>
     body{
    background-image: linear-gradient(to right,  rgb(255, 255, 255), #f1f1f1);
  }
  form{
    background-image: linear-gradient(to right, rgb(255, 255, 255), #f1f1f1);
  }
  h1.p{
    color:#fff;
  }
  .jobs{
    border:1px solid black;
    box-shadow:5px 5px 4px 5px grey;
margin:10px;
padding:10px;
  }
    .navbar{
      overflow:hidden;
      background-color:#333;
      position:fixed;
top:0;
width:100%;
    }
    .main{
        background-image: url("job2.jpg");
            padding-top: 10%;
        padding-bottom: 90px;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .main .main_content{
            padding-top: auto;
            padding-left: 10%;
            margin-right: 10%;
        }
    .main .main_content h2{
        color:#f7e7e7;
     padding-bottom: 60px;
        text-align: center;
        font-size: 50px;
        font-family:" Big Shoulders Text", cursive;
        font-weight: bolder;
        line-height: 25px;

    }
    .main .main_content h2 span{
font-size: 15px;
opacity: 0.9;
color:#f7e7e7;
font-weight: 6000;
line-height:20px;
    }
    .main .main_content .btn{
    margin-top: 50px;
}
.main .main_content .btn a{
    text-decoration: none;
    margin: 50px;
    margin-left:650px;
    padding:10px 20px;
    background-color: rgb(34, 19, 32);
    color:white;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    text-align: center;
    border: 2px solid black;
    border-radius: 10px;
    transition: 0.3s;
}
.main .main_content .btn a:hover{
background-color: black;
    color: orange;
    border: none;
    border-bottom: 4px solid orange;
    transition: 0.5s;}
    @media screen and (max-width: 700px){
      .main .main_content .btn a{
      margin-left:200px;}
    }
</style>
<title>Career</title>
<body>
<div class="main">
            <div class="main_content">
                <h2>ALL JOBS IN ONE PLACE<br><br>
                <span> One search, global reach</span></h2>
  <div class="btn">
                    <a href="available.php">Available now</a>
                </div>
            </div>
        </div>
  <div class="row">
<?php
  $sql="SELECT cname,position,jobDesc,skills,CTC from jobs";
  $result=mysqli_query($conn,$sql);
  if($result->num_rows>0){
    while($rows=$result->fetch_assoc()){
 
  echo'
<div class="col-md-4">
<div class="jobs">
<h3 style="text-align:center;">'.$rows['cname'].'</h3>
<h4 style="text-align:center;">'.$rows['position'].'</h4>
<p style="color:black; text-align:justify;">'.$rows['jobDesc'].'</p>
<p style="color:black;"><b>skills Required:</b>'.$rows['skills'].'</p>
<p style="color:black;"><b>ctc:</b>'.$rows['CTC'].'</p>
<button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="exampleModal">
   Apply now
 </button>
</div>
  </div>';
    }}
    
  ?>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apply For Jobs</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Company</label>
            <textarea class="form-control" name="company"></textarea>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Applying For</label>
            <textarea class="form-control" name="apply"></textarea>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Qualification</label>
            <textarea class="form-control" name="qual"></textarea>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Year Passout</label>
            <textarea class="form-control" name="year"></textarea>
          </div>
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit">Apply</button>
        </form>
      </div>
    </div>
  </div>
</div>
   </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
