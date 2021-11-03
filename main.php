<html>
<head>
<title>PHP DB</title>
<!-- Javascript files -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="myjs.js"></script>
</head>

<body>

<?php
//1. connect to database

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "patient_info_list";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname); //database object

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error) . "<br>";
  exit();
} else {
	//2. display results
	$sql = "SELECT * FROM users";
	$result = $conn->query($sql);
	
	//does result of query > 0
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "user id: " . $row["user_id"] . " | Name: " . $row["fname"]. " " . $row["lname"]. " | Email: " . $row["email"] . " | Date: " . $row["date"];
			echo " | [<a href='edit.php?id=" . $row["user_id"] . "'>edit</a>]";
			echo " | [<a href='delete.php?id=".$row["user_id"]."'>Delete</a>]";
			echo "<br>";
		
		}
		
	} else {
		echo "no results";
	}
	
}
$conn->close();

?>
<br>
<hr>
<br>

<!-- Create form to add new user -->
<form id="user_form" method = "post">
First name*: <input type="text" name="fname"><br>
Last Name*: <input type="text" name="lname"><br>
Email*: <input type="text" name="email"><br>
<button type="button" id="submit">Submit</button>
<div id="message"></div>



</form>


</body>
</html>