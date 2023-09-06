<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname ="mydb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

//echo"connected Successfully";
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
 // echo"connected Successfully";}
 }

 //echo"store Successfully";
    if(isset($_POST['submit'])){
	$station=$_POST['station'];
	$distance=$_POST['distance'];
	// $row = mysqli_fetch_assoc($result);
	 // echo $row['name'];
	
	$sql = "INSERT INTO station (station, distance)
	VALUES ('$station','$distance')";
	
	$result=mysqli_query($conn,$sql);
	
	if($result){
		
          //echo"store Successfully";
		  header('location:admin.php');
	}
	else{
		die(mysqli_error($conn));
	} 
	}
	?>
