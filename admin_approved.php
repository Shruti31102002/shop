<!doctype>
<html>
<body>
<h2>create table</h2>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if(!$conn){
	die("Connection failed:"  . mysqli_connect_error());
}

$sql = "CREATE TABLE admin_approved(
       id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	   name VARCHAR(30)NOT NULL,
	   email VARCHAR(30)NOT Null,
	   	 contact VARCHAR (50),
	   reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";
	  
if (mysqli_query($conn, $sql)) {
	
  echo "Table admin_approved created successfully";

	  
  }
   else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

</body>
</html>