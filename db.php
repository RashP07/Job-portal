<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename="register";
// Creating connection
$conn = mysqli_connect($servername, $username, $password,$databasename);
if (isset($_POST['submit'])) {
    $cname = $_POST['cname'];
	$pos = $_POST['pos'];
	$jobDesc =$_POST['jobDesc'];
	$skills =$_POST['skills'];
	$CTC =$_POST['CTC'];
	
$sql="INSERT INTO `jobs`( `cname`, `position`, `jobDesc`, `skills`, `CTC`) VALUES ('$cname','$pos','$jobDesc','$skills','$CTC')";
mysqli_query($conn, $sql);
   
}


?>