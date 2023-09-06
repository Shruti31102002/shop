<?php
session_start();
if(isset($_SESSION['User_Name'])){
	header("location:loginpage.php");
	
}
else{
	?>
	<!DOCTYPE html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
    
<head>
	<title>MyLogin Page</title>
	<link rel="stylesheet" href="adminpage.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<body>
<div class="big">
		<div class="login-box">
			<form action="inserted.php" method="POST">
			<div class="station box">
			<h1 class="heading1">DASHBOARD</h1>
			<h2 class="heading2">STATION REGISTER</h2>
	<div class="box">		
  <div class="d-flex justify-content-center mt-3 login_container .px-2 ">
    <label>Station:</label>
    <input type="text" placeholder=""name="station" value="">
	</div>
	</div>
	<div class="box2">
  <div class="d-flex justify-content-center mt-3 login_container .px-2 ">
    <label>Distance:</label>
    <input type="text" placeholder="" name="distance" value="">
  </div>
  </div>
  <div class="d-flex justify-content-center mt-3 login_container">
    <button type="submit" name="submit" class="btn btn-primary">REGISTER</button>
  </div>
  </div>
  </form>
  <form>
  <div class="user">
  <table class="containertable table table-bordered">
 
   <h3> User Details </h3>
  <thead>
    <tr>
	  <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
	  <th scope="col">Contact</th>
	  <th scope="col" class="action">Action</th>
	  
    </tr>
  </thead>
  <tbody>
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
   //$sql = "SELECT  `id`, `name`, `email`, `contact` FROM `admin_pannel`";
 //$result = mysqli_query($conn,$sql);
  //$row = mysqli_fetch_assoc($result);
	// while($row = mysqli_fetch_assoc($result)){
						 $sql = "SELECT * FROM `admin_pannel` ";
						  $result = mysqli_query($conn,$sql);
						    $row = mysqli_num_rows($result);
						 while($row = mysqli_fetch_assoc($result)){
							  
		 
		  $id=$row['id'];
		  $name=$row['name'];
		  $email=$row['email'];
		  $contact=$row['contact'];
	 
		 ?>
		</form> 
  	  <tr>
	  <th scope="row"><?php echo $id;?></th>
      <td><?php echo $name;?></td>
     <td><?php echo $email;?></td>
	  <td><?php echo $contact;?></td>	  
	  
	   <div class="container">
	   <td>
     <button type="button" class="btn btn-info btn-sm" name="submit"><a href="select.php?selectid=<?php echo $id?>&name=<?php echo $name?>&email=<?php echo $email;?>&contact=<?php echo $contact; ?>">ACCEPT</a></button></td>
   <td> <button type="button1" class="btn btn-info btn-sm "><a href="deleted.php?deleteid=<?php echo $id; ?>">REJECT</a></button></td>
	</div>
	
	 <?php } ?>
			</form>
			</body>
			</div>
			</div>
<?php } ?>		
 
	  
    </tr>
  </thead>
  <tbody>  
   <div class="station">
  <table class="stationtable table table-bordered">
   <h3> Station Details </h3>
  <thead>
    <tr>
	  <th scope="col">Id</th>
      <th scope="col">STATION</th>
      <th scope="col">DISTANCE</th>
	 <!--- <th scope="col" class="action">Action</th>---> 
    </tr>
  </thead>
  <tbody>
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
   //$sql = "SELECT * FROM `station`";
 //$result = mysqli_query($conn,$sql);
 // $row = mysqli_fetch_assoc($result);
	// while($row = mysqli_fetch_assoc($result)){
	$sql = "SELECT * FROM `station` ";
	$result = mysqli_query($conn,$sql);
    $row = mysqli_num_rows($result);
     while($row = mysqli_fetch_assoc($result)){	  
		 
		  $id=$row['id'];
		  $station=$row['station'];
		  $distance=$row['distance'];
	 
		 ?>
		 
	</div>	 
		</form> 
  	  <tr>
	  <th scope="row"><?php echo $id;?></th>
      <td><?php echo $station;?></td>
     <td><?php echo $distance;?></td>  
	  
	   <!---<div class="container">
    <td><button type="button" class="btn btn-info btn-sm " name="submit"><a href="stationaccpet.php?accpetid=<?php echo $id;?>">ACCEPT</a></button></td>
   <td> <button type="button1" class="btn btn-info btn-sm "><a href="stationdelete.php?deleteid=<?php echo $id; ?>">REJECT</a></button></td>
	</div>---->
	
	 <?php } ?>
			</form>
			</body>
			</div>
			</div>	
    </tr>
  </thead>
  <tbody>
  