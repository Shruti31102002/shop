<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="myDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if(isset($_GET['deleteid'])){
	
	$id=$_GET['deleteid'];
	
	$sql="delete from admin_pannel where id=$id";
	$result=mysqli_query($conn,$sql);
	if($result){
		//echo"Deleted Successfully";
		header('location:admin.php');
		
	}
	else{
		die(mysqli_error($conn));
	} 
}
?>