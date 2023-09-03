<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename="register";
// Creating connection
$conn = mysqli_connect($servername, $username, $password,$databasename);

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
	$company = $_POST['company'];
	$qual = $_POST['qual'];
	$apply =$_POST['apply'];
	$year =$_POST['year'];
	$sql="INSERT INTO `candidates`(`name`,`company`, `qual`, `year`, `apply`) VALUES ('$name','$company','$qual','$year','$apply')";
mysqli_query($conn, $sql);

}
?>