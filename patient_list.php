<!doctype html>
<!--references 
	  reference  jQuery v1.11.1 | (c) 2005, 2014 jQuery Foundation, Inc.
	  reference : http://responsiveslides.com v1.54 by @viljamis
	  https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN
	  https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/
	  Reference file:///C:/Users/Vince/Desktop/Web%20design%20assignment%201/404%20page%20not%20found/index.html
	  reference :https://www.websparrow.org/web/how-to-create-and-save-text-file-in-javascript
	  reference https://www.codegrepper.com/code-examples/javascript/javascript+write+to+text+file 
	  reference https://www.codegrepper.com/code-examples/javascript/javascript+write+to+text+file 	  
	  https://oss.maxcdn.com/respond/1.4.2/respond.min.js
	  Email Validation https://stackoverflow.com/questions/46155/how-to-validate-an-email-address-in-javascript 
	  Slide control https://www.w3schools.com/howto/howto_js_slideshow.asp
	  required attribute on https://www.codegrepper.com/code-examples/javascript/javascript+add+required+attribute+to+input 
	  reference https://www.codegrepper.com/code-examples/javascript/javascript+write+to+text+file 
	  reference https://www.codegrepper.com/code-examples/javascript/javascript+write+to+text+file 	  
--> 
<html lang="en">
  <head>
    <!-- Required meta tags -->
	<title>St . Joseph Hospital Homepage</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
   	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<script src="js/Script.js"></script>
	<script src="js/FileSaver.js"></script>	
	<script src="js/jquery-1.11.1.min.js"></script> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>






  </head>
  <body>
  <!-- header starts here -------------------------------------------------------------------> 
	<!-- header starts here --> 
		<div class = "header" > 
			<div class="container">
				<div class="row">
				   
				    <!-- Navigation Menu div starts here -------------------->
					<div class="menu-box">
					  <div id="navmenu">
						<ul>
						  <li><a href="homepage.html" >Home</a>
						  </li>
						  <li><a href="404_not_found.html">Mental Health</a>
							<ul>
							  <li><a href="404_not_found.html">Find Help</a></li>
							  <li><a href="404_not_found.html">Brochures</a></li>
							  <li><a href="404_not_found.html">MH Questionaire</a></li>
							</ul>
						  </li>
						  <li><a href="#">Services</a>
							<ul>
							  <li><a href="404_not_found.html">Services Details</a></li>
							  <li><a href="#">Psychiatry</a>
							  <ul>
								  <li><a href="Patient_login.php">Appointments</a></li>
								  
								</ul>
							  </li>
							</ul>
						  </li>
						  <li><a href="about-us.html">About</a>
							 <ul>
							  <li><a href="404_not_found.html">About us</a></li>
							  <li><a href="404_not_found.html">Our Team</a></li>
							  <li><a href="404_not_found.html">Contact us</a></li>
							</ul>
						  </li>
						  <li><a href="appointment.html">News</a>
							<ul>
							  <li><a href="404_not_found.html">FAQ</a></li>
							  
							</ul>
						  
						  </li>
						  <li><a href="contact-us.html">Language</a>
						    <ul>
							  <li><a href="404_not_found.html">English</a></li>
							  <li><a href="404_not_found.html">French</a></li>
							</ul>
						  </li>  <!----login button starts here ---------------------------->
						  <li class="pull-right"><a href="#" class="call-menu"> <span>Welcome admin</span></a> </li>
						</ul>
					  </div>
					</div>
				
				</div>
			  
			
			<!-- Logo of the hospital div --------------------------------------------------> 
			<div class ="header-logo">
					<a href="homepage.html"><img src="images/logo.gif" alt="logo"/></a>	
				</div> 
				
				
	
            <!-- Short description of the hospital ------------------>
				<div class= "header-info">   
					 <p>Save lives</p>
				    <h4>St . Joseph Gotham Hospital</h4>			
				</div>      
			</div>
			
			</div>	
			<div class= "clearfix"> </div>
		</div> 
    <!--header ends here-->
  <!--header ends here------------------------------------------------------------------------------------------------------> 	
		<div class="header-bottom">
		<div class="container">
				<!--Secondary Nav bar starts here      ----------------------------------------------------------------->
			<div class="top-nav cl-effect-5">
				<span class="menu-icon"><img src="images/menu-icon.png" alt=""/></span>		
				<ul class="nav1">
					<li><a href="homepage.html"><span data-hover="Covid">Covid</span></a></li>
						
					<li><a href="Patient_Information.html"> <span data-hover="Add Patient">Add Patient</span></a></li>
					<li><a href="Patient_list.php"> <span data-hover="Patient List">Patient List</span></a></li>
					<li><a href="404_not_found.html"> <span data-hover="Programs">Programs</span></a></li>
					<li><a href="Patient_login.html"> <span data-hover="Join us">Join us</span></a></li>
					
				</ul>
				<!-- script-for-menu where when the screen is minized the menu icon shows up  ---------------------------------------->
				<script>
				   $( "span.menu-icon" ).click(function() {
					 $( "ul.nav1" ).slideToggle( 300, function() {
					 // Animation complete.
					  });
					 });
				</script>
				<!-- /script-for-menu -->
			</div>
			
			<!--Secondary nav menu ends here --------------------------------------------------------------------------------------->
			<!----search bar ends here ---->
			<form class="navbar-form navbar-right">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
					<button type="submit" class="btn btn-default"></button>
				</div>		
			</form>
			<div class="clearfix"> </div>
						
		</div>
	</div>
				
<!-- registration form starts here ---------------------------------------------------------> 
		<div class="row">
		<h1 class="heading-title mb20">Patient Information List </h1>
		

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

					//2. display results
					$sql = "SELECT * FROM patient_info";
					$result = $conn->query($sql);
					
					//does result of query > 0
					if ($result !== false && $result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							echo "Patient ID: " . $row["PatientID"] . " | Name: " . $row["firstname"]. " " . $row["lastname"]. " | Email: " . $row["email"] . " | Phone Number: " . $row["phone"];
							//echo " | [<a href='edit.php?id=" . $row["user_id"] . "'>edit</a>]";
							//echo " | [<a href='delete.php?id=".$row["user_id"]."'>Delete</a>]";
							echo "<br>";
						
						}
						
					} else {
						echo "no results";
					}
					
				}
	$conn->close();

		?>
          
      </div> 


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	
    <script src="js/bootstrap.js"> </script>
  </body>
</html>


