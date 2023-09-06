<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="mydb";

$conn = mysqli_connect($servername, $username, $password, $dbname);
echo"Successfully";
//if(isset($_GET['selectid'])){
	echo"Successfully";
$id=$_GET['selectid'];
$name=$_GET['name'];
$email=$_GET['email'];
$contact=$_GET['contact'];

$sql = "delete `id`, `name`, `email`, `contact` FROM `admin_pannel`";

	$result = mysqli_query($conn,$sql);

	if($result){
		echo"Successfully";
		//header('location:admin.php');
		echo $name;
	}
	else{
		die(mysqli_error($conn));
	} 
	
?>