<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname ="mydb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

//if(isset($_GET['selectid'])){
$id=$_GET['selectid'];
$name=$_GET['name'];
$email=$_GET['email'];
$contact=$_GET['contact'];

$sql = "SELECT `id`, `name`, `email`, `contact` FROM `admin_pannel`";

	$result = mysqli_query($conn,$sql);

	if($result){
		echo"Successfully";
		//header('location:admin.php');
		echo $name;
	}
	else{
		die(mysqli_error($conn));
	} 
//}
//if(isset($_POST['submit'])){
	$name=$_GET['name'];
	$email=$_GET['email'];
	$contact=$_GET['contact'];
	// echo"$name";

	$sql = "INSERT INTO `admin_approved`( `Name`, `Email`, `Contact`)
	VALUES ('$name','$email','$contact')";
	
   /* $sql="delete from admin_pannel where id=$id";*/
	echo"store Successfully";
	//echo"$name";
	
	//$sql="INSERT INTO `admin_approved`(`id`, `name`, `email`, `contact`, `reg_date`)
	//VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')";
	
	$row = mysqli_query($conn,$sql);
	
	if($row){
          echo"store Successfully";
		// header('location:admin.php');
	}
	else{
		die(mysqli_error($conn));
	} 
	//}
  
  $name=$_GET['name'];
	$email=$_GET['email'];
	$contact=$_GET['contact'];
	 echo"$name";

	/*$sql = "Delete from `admin_pannel`( `Name`, `Email`, `Contact`)
	VALUES ('$name','$email','$contact')";*/
	
	$sql="delete from admin_pannel where id=$id";
	
	$result=mysqli_query($conn,$sql);
	if($result){
		//echo"Deleted Successfully";
		header('location:admin.php');
		
	}
	else{
		die(mysqli_error($conn));
	} 
?>
