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

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];

	$sql = "INSERT INTO `admin_pannel`( `Name`, `Email`, `Contact`)
	VALUES ('$name','$email','$contact')";
	$result = mysqli_query($conn,$sql);
	if($result){
          echo"store Successfully";
	} 
	else{
		die(mysqli_error($conn));
	} 
}

?>

<!doctype html>
<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
{
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}
button.btn.btn-primary.btn-sm.\.ml-3 {
    margin-left: 289px;
    padding: 15px;
    border-radius: 15px;
    width: 90px;
}

  </style>
</head>
<body>
<body>

<div class="sidenav">
  <a href="http://localhost/php-practice/project/loginpage.php">ADMIN</a>
  <a href="http://localhost/php-practice/project/registation%20page.php">Registation</a>
  <a href="http://localhost/php-practice/project/userlogin.php">LOGIN</a>
  <a href="#contact">Contact</a>
</div>

<div class="container">
<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-6 bg-success">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                <form method="POST" class="mx-1 mx-md-4">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" class="form-control" id="name"  name="name" />
                      <label class="form-label" for="form3Example1c">Your Name</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email"  id="email"  name="email" class="form-control" />
                      <label class="form-label" for="form3Example3c">Your Email</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="contact"  name="contact" class="form-control" />
                      <label class="form-label" for="form3Example4c">Contact</label>
                    </div>
                  </div>
                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" name="submit" class="btn btn-primary btn-lg">Register</button>
                  </div>
                </form>
				<button class="btn btn-primary btn-sm .ml-3" onClick="window.location.href='http://localhost/php-practice/project/userlogin.php';">  
					LOGIN	
				</button> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>