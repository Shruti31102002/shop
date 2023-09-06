<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $contactErr = "";
$name = $email = $gender = $options = $contact = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
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
<div class="all">

<?php
session_start();
if(isset($_SESSION['User_Name'])){
	header("location:userlogin.php");
	
}
else{
}
	?>

<!DOCTYPE html>
<html>
		<head>
			<title>BOOKING PAGE</title>
			<link rel="stylesheet" href="userpage.css">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
			<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
			<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
			<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
		  <a href="http://localhost/php-practice/project/userpage.php">BOOKING</a>
		  <a href="#contact">Contact</a>
		</div>
			<div class="form">
				<div class="all">
				   <h2 class="book">Booking form</h2>
					<!--<p><span class="error">* required field</span></p>--->
					<form method="post" action="print.php <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"id="myfrm">  
						<div class="data">
						 <div class="style">
						 <?php
						$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname ="mydb";

						$conn = mysqli_connect($servername, $username, $password, $dbname);
						 $sql = "SELECT * FROM `admin_approved`";
						 $result = mysqli_query($conn,$sql);
						  $row = mysqli_fetch_assoc($result);
						  // $row = mysqli_num_rows($result);
								//while($row = mysqli_fetch_assoc($result)){
								  $id=$row['id'];
								  $name=$row['name'];
								  $email=$row['email'];
								  $contact=$row['contact'];
								  ?>
							<label  class="label">Name:</label>
							<input type="text" name="name" value="<?php echo $name;?>">
							<span class="error"> * <?php echo $nameErr;?></span>
							<br><br>
						 </div>
						 <div class="style">
							<label  class="label">E-mail:</label>
							<input type="text" name="email" value="<?php echo $email;?>">
							<span class="error">* <?php echo $emailErr;?></span>
							<br><br>
					     </div>
					     <div class="style">
							<label  class="label">Contact:</label>
							<input type="text" name="contact" value="<?php echo $contact;?>">
							<span class="error"><?php echo $contactErr;?></span>
							<br><br>
						 </div>
						 
						<?php //} ?>
						 <div class="style">
							<div class="label">
					        <label  class="label">Beginning:</label>
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
							$sql = "SELECT * FROM `station` ";
							$result = mysqli_query($conn,$sql);
						    $row = mysqli_num_rows($result);?>
							<select name="options" id="from">
								<option value="">Station</option>
								<?php while($row = $result->fetch_assoc()){ ?>
								<option value="<?php echo $row['station'];?>"><?php echo $row['station']; ?></option>
								<?php }?>
							</select>
							</div>
						 </div>							
                         <div class="style">
					     <div class="label">
					     <label  class="label">DESTINATION:</label>
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
							$sql = "SELECT * FROM `station`";
							$result = mysqli_query($conn,$sql);
						    $row = mysqli_num_rows($result);?>
							<select name="end" id="froms">
							<option value="">Station</option>
							<?php while($row = $result->fetch_assoc()){ ?>
							<option value="<?php echo $row['station'];?>"><?php echo $row['station']; ?></option>
							<?php }?>
							</div>
							</div>
							</select>
							<div  class="style">
					       
					            <label  class="label">GENDER:</label>
								<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female">Female
								<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male">Male
								<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="Other">Other
								<br><br>
							</div>
							</div>
							<div class="style">
							<div class="label">
								<a href="print.php">
								<input type="submit" name="submit" value="submit" onClick="myFunction()">																											
								</a>	   
							</div>
							</div>
				</div>
				</form>
				<?php 
			/*	$servername = "localhost";
					  $username = "root";
					  $password = "";
					  $databasename = "mydb";
					    $conn = mysqli_connect($servername, $username, $password, $dbname);						    
						     if (!$conn) {
						     die("Connection failed: " . mysqli_connect_error());	
						    }					
					  $query = "SELECT station, distance FROM `Station` where id = '$id'";	
					  
					  $result = mysqli_query($conn, $query);
					  
					  if (mysqli_num_rows($result)  > 0) {
						  foreach($result as $row) {
							  echo $row['station'];
						  }
					  }
					  /*{
						  while($row = mysqli_fetch_assoc($result))
							  {
							 echo "station: " . $row["station"]
						     . " - distance: " . $row["distance"]. "<br>";
						  }*/
					 // } else {
						//  echo "no record found";
					//  }
					  
					 // $conn->close();*/
				?>
				
				<?php  
				//echo $row['id'];  
				//echo $end;
				//$x = $options;  
				//$y = $end;
				//$z = ($x)*10;
				//$a = $z;
				 //echo $x;
				 //echo $y;
					?>  
					<!----
			     	echo "<h2>Your Input:</h2>";
					echo "Name:".$name;
					echo "<br>";
					echo "Email:".$email;
					echo "<br>";   
					echo "Contact:".$contact;
					echo "<br>";
					echo "Beginning:".$options;
					echo "<br>";
					echo "DESTINATION:".$end;
					echo "<br>";
					echo "gender:".$gender;
					//	echo "Total amount".$z;
					-------->
					<?php //} ?>
					
					<!---// if(isset($_POST['submit'])){
	                $name=$_POST['name'];
					$email=$_POST['email'];
					$contact=$_POST['contact'];
				    $options=$_POST['options'];
					$end = $_POST['end'];
					$gender = $_POST['gender'];
					//echo $options;
					}
					------>
			</div>
			</div>
		</div>
		</div>
	</div>
  </body>
</html>