<!DOCTYPE html>
<html>
		<head>
			<title>Ticket</title>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="userpage.css">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
			<!---<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			---->
			<style>
			.card-body {
					padding: 35px;
					padding-top: 0px;
					width: 50%;
					margin: 0px auto;
					border: 1px solid #979797;
					border-radius: 20px;
					background-color: darkgrey;
				}

				.card.card-heading {
					padding: 20px;
					width: 50%;
					margin: 0px auto;
					border: 1px solid #979797;
					border-radius: 20px;
					text-align: center;
					font-weight: 700;
				     background-color: darkgrey;
				}
				div {
					border: 1px solid #979797;
					padding: 10px;
					background: cornsilk;
					border-radius: 16px;
				}
				label {
					margin-left: 10px;
					margin-right: 17px;
				}
			</style>
		</head>
		<body>
			<?php
			// define variables and set to empty values
			$nameErr = $emailErr = $genderErr = $contactErr = "";
			$name = $email = $gender = $options = $contact = "";

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			  if (empty($_POST["name"])) {
				$nameErr = "Name is required";
			  } else{
				$name = test_input($_POST["name"]);
			  }
			  
			  if (empty($_POST["email"])) {
				$emailErr = "Email is required";
			  } else {
				$email = test_input($_POST["email"]);
			  }
				
			  if (empty($_POST["contact"])) {
				$contact = "";
			  } else {
				$contact = test_input($_POST["contact"]);
				}
			  }

			  if (empty($_POST["options"])) {
				$options = "";
			  } else {
				$options = test_input($_POST["options"]);
			  }
			  if (empty($_POST["end"])) {
				$end = "";
			  } else {
				$end = test_input($_POST["end"]);
			  }

			  if (empty($_POST["gender"])) {
				$genderErr = "Gender is required";
			  } else {
				$gender = test_input($_POST["gender"]);
			  }

			function test_input($data) {
			  $data = trim($data);
			  $data = stripslashes($data);
			  $data = htmlspecialchars($data);
			  return $data;
			}
			?>


			<?php
			session_start();
			if(isset($_SESSION['User_Name'])){
				header("location:userlogin.php");
				
			}
			else{
			}
			?>
				<?php
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname ="mydb";

					$conn = mysqli_connect($servername, $username, $password, $dbname);

					//if(isset($_GET['submit'])){
					$name=$_POST['name'];
					//$name = isset($name) ? $name : '';
					$email = $_POST['email'];
					$contact = $_POST['contact'];
				    $options = $_POST['options'];
					$end = $_POST['end'];
					$gender = $_POST['gender'];
					//}
					//echo $name;
				?>
				
				
				
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
				$sql = "SELECT * FROM `station` where station = '$options' ";
				$result = mysqli_query($conn,$sql);
				$row = mysqli_num_rows($result);
				while($row = mysqli_fetch_assoc($result)){	  	 
				$id=$row['id'];
				$station=$row['station'];
				$d1=$row['distance'];
				//echo $station;
				//echo $d1;
				 }
				?>			
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
				$sql = "SELECT * FROM `station` where station = '$end' ";
				$result = mysqli_query($conn,$sql);
				$row = mysqli_num_rows($result);
				while($row = mysqli_fetch_assoc($result)){	  	 
				 $id=$row['id'];
				$station=$row['station'];
				$d2=$row['distance'];
				//echo $station;
	     		 // echo $d2;
				 }
				?>
				
				
				<?php
				$x = $d1;  
				$y = $d2;
				$z = ($y - $x )*5;
				?>
				
				
				<div class="card card-ticket">
				  <div class="card card-heading">
					Ticket 
				  </div>
				  <div class="card-body">
					<!--<h5 class="card-title">Special title treatment</h5>--->
					<p class="card-text">				
						<div>
						  <label>Name:</label>
						  <?php echo $name;?>
						</div>
						<div>
							<label>Email:</label>
						    <?php echo $email;?>
						</div>
						<div>
							<label>Contact:</label>
							<?php echo $contact;?>
						</div>
						<div>
							<label>Beginning:</label>
							<?php echo $options;?>
						</div>
						<div>
							<label>Destination:</label>
							<?php echo $end;?>
						</div>
						<div>
							<label>Gender:</label>
							<?php echo $gender;?>
						</div>
						<div>
							<label>Total amount:</label>
							<?php echo $z;?>
						</div>
						<div>
							<a href="#" class="btn btn-primary print" onClick="window.print()">Print</a>
					   </div>
					</p> 
				 </div>
				</div>	
		</body>
</html>