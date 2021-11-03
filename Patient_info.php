<?php 
////////reference database.php from in class seminar./  ////////////////////////////////////////////////

	
		//3. insert into the database 
		//3b. meessage if cannot insert 
		$host = "localhost";
		$username = "root";
		$password = "";
		$dbname = "patient_info_list";

		// Create connection
		$conn = new mysqli($host, $username, $password, $dbname); //database object

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error) . "<br>";
			$response = "Connection failed";
			echo json_encode($response);
			exit();
		} else {
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$PatientID = $_POST['PatientID'];
			$Gender = $_POST['Gender'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$DOB = $_POST['DOB'];
			$City = $_POST['City'];
			$Province = $_POST['Province'];
			$Ref_DoctorID = $_POST['Ref_DoctorID'];
			$Address = $_POST['Address'];
			$Meds = $_POST['Meds'];
			$Allergy = $_POST['Allergy'];
			$message = $_POST['message'];

			//insert to db
			$sql = "INSERT INTO patient_info (firstname, lastname, PatientID,Gender,email,phone,DOB,City,Province,Ref_DoctorID,Address,Meds,Allergy,message) 
					VALUE ('".$firstname."', '".$lastname."', '".$PatientID."', '".$Gender."', '".$email."', '".$phone."', '".$DOB."', '".$City."', '".$Province."', '".$Ref_DoctorID."', '".$Address."', '".$Meds."', '".$Allergy."', '".$message."')";
			$result = $conn->query($sql);
			
			if($result) {
				//if insert succesful 
				header("Location: /webass1/Patient_successfully_added.html"); 
			} else {
				$response = "Could not add Patient.";
				echo json_encode($response);
			}
		}

//4. send back a message of successful insertion of data

	
	
	
	/************ editing user***************/
	//$sql_edit = "UPDATE users SET fname = '".$fname."', lname = '".$lname."', email = '".$email."' WHERE user_id = '".$userid."' ";
	
	
	
	
	
	//$conn->close();

?>