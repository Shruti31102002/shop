
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="myDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
 if(isset($_POST['login'])){
	$email=$_POST['email'];
  $contact = $_POST['contact'];
  //echo $email;
   $sql = "SELECT email, contact FROM `admin_approved` ";
  // $sql = "SELECT  id, email, password FROM record_form WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) >0) {
			//echo "hello";

           while($row = mysqli_fetch_assoc($result)) {

            if ($row['email'] == $email && $row['contact'] == $contact) {

                echo "Logged in!";
				header("location:userpage.php");
			}
		
			else{
				//echo '<script>alert("admin not verify you")</script>';
			}
		   }
		}
 }
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
	<link rel="stylesheet" href="loginpage.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
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


  </style>

</head>

<body>
<div class="sidenav">
   <a href="http://localhost/php-practice/project/loginpage.php">ADMIN</a>
  <a href="http://localhost/php-practice/project/registation%20page.php">Registation</a>
  <a href="http://localhost/php-practice/project/userlogin.php">LOGIN</a>
  <a href="#contact">Contact</a>
</div>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
									<p class="all">USER LOGIN</p>
					</div>
				</div>
				<div class="style">
				<div class="d-flex justify-content-center form_container">
					 <form action="" method="post">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<i class="fa fa-user" aria-hidden="true"></i>
								</div>
				               <input type="text" placeholder="Email"
						            name="email" value="">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
						<i class="fa fa-lock" aria-hidden="true"></i>	</div>
				          <input type="contact" placeholder="contact"
						     name="contact" value=""> 
						</div>
						
			<div class="d-flex justify-content-center mt-3 login_container">
				 	<input class="button" type="submit"
					name="login" value="Login">
				   </div>
					</form>
				</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>