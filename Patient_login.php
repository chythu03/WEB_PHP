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
								  <li><a href="login.php">Appointments</a></li>
								  
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
						  <li class="pull-right"><a href="login.php" class="call-menu"> <span>Login</span></a> </li>
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
					 <p>Where Batman Gets Treated</p>
				    <h4>St . Joseph Gotham General</h4>			
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
					<li><a href="homepage.html"><span data-hover="OMG">Covid</span></a></li>
						
					<li><a href="404_not_found.html"> <span data-hover="Joker">Research</span></a></li>
					<li><a href="404_not_found.html"> <span data-hover="Robin">Education</span></a></li>
					<li><a href="404_not_found.html"> <span data-hover="Anti-Bat">Programs</span></a></li>
					<li><a href="login.html"> <span data-hover="Join us">Join us</span></a></li>
					
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
          <form class="appointment-form"  onSubmit="WriteToFile(this)" action="config.php" >  <!-- use the onsubmit attribute to fire write to file function for wrting data into txt file-->
		  
           <div class="col-md-8 col-md-8">
              <h1 class="heading-title mb20">Registration Form</h1>
			  <br>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
					<!-- by using the required attribute from jquery makes the box required --> 
                      <input class="form-control" id="fname" name="fname" placeholder="First Name*" type="text" required>
                    </div>
                  </div>
				  <br>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input class="form-control" id="lname" name="lname" placeholder="Last Name*" type="text" required>
                    </div>
                  </div>
				  <br>
				   <div class="col-md-6">
                    <div class="form-group">
                      <input class="form-control" id="email" name="email" placeholder="Email*" type="email" required >
                    </div>
                  </div>
				  <br>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input class="form-control" id="phone" name="phone" placeholder="phone*" type="text" required >
                    </div>
                  </div>
				  <br>
				  <!--- using the drop down select list for users to select from provinces and cities--> 
				    <div class="col-md-6">
                    <div class="form-group">
                      <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="City">
						<datalist id="datalistOptions">
						  <option value="Toronto">
						  <option value="Mississauga">
						  <option value="North York">
						  <option value="Lorem">
						  <option value="Lorem">
						</datalist>
                    </div>
                  </div>
				  <br>
				  <div class="col-md-6">
                    <div class="form-group">
                      <input class="form-control" list="datalistOptions2" id="exampleDataList2" placeholder="Province">
						<datalist id="datalistOptions2">
						  <option value="Ontario">
						  <option value="BC">
						  <option value="Gotham">
						  <option value="Lorem">
						  <option value="Lorem">
						</datalist>
                    </div>
                  </div>
				  <br>
				  <div class="col-md-12">
                    <div class="form-group">
                      <input class="form-control" id="Postal Code" name="Postal Code" placeholder="Postal Code" type="text" >
                    </div>
					
                  </div>
				  <br>
				  <div class="col-md-12">
                    <div class="form-group">
                      <input class="form-control" id="Address" name="Address" placeholder="Address" type="text" >
                    </div>
					
                  </div>
				  <br>
				   <!-- use the date type box for the appointment dates --> 
				   <div class="col-md-6">
                    <div class="form-group">
					  <label for="exampleDataList" class="form-label">Choose Two Appointment Dates </label>
                      <input class="form-control" id="apointmenttime1" name="apointmenttime1" placeholder="" type="date" required>
                    </div>
                  </div>
				  <br>
				   <div class="col-md-6">
                    <div class="form-group">
					  <label for="exampleDataList" class="form-label"> Secondary Date             </label>
                      <input class="form-control" id="apointmenttime2" name="apointmenttime2" placeholder="" type="date" required>
                    </div>
					
                  </div>
				  <br>
				  <!-- use the time type for choosing time --> 
				   <div class="col-md-6">
                    <div class="form-group">
					  <label for="exampleDataList" class="form-label">First Desired Time-frame </label>
                      <input class="form-control" id="Timeframe1" name="Timeframe1" placeholder="" type="time" required  >
                    </div>
                  </div>
				  <br>
				   <div class="col-md-6">
                    <div class="form-group">
					  <label for="exampleDataList" class="form-label">Secondary Desired Time-frame </label>
                      <input class="form-control" id="Timeframe2" name="Timeframe2" placeholder="" type="time" required >
                    </div>
                  </div>
				  <br>
				  <!-- use the file type box for uploading users history --> 
				  <div class="col-md-12">
						  <div class="mb-12">
							 <label for="formFileLg" class="form-label">Upload Your Past Health Care History(word.,excel.,pdf.)</label>
							 <input class="form-control form-control-lg" id="formFileLg" type="file">
						 </div>
				  </div>
				  <br>
				  
                  <!-- lastly a textbox for the user to input any addational message he or she should have --> 
                  <div class="col-md-12">
                    <div class="form-group">
					   <label for="exampleDataList" class="form-label">Additional Message </label>
                      <textarea name="message" id="message" class="form-control" rows="5"  ></textarea>
                    </div>
                  </div>
				
               <!-- use the onlick attribute to fire the savetextfile(*) function to save the data into txt file on the button click -->     				   
                </div>
				<div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary btn-lg" onclick = "saveTextAsFile();">Submit Now</button>
			    </div>   
				
           </div>
          </form>

<!-- function to save the data into txt file ---> 		  
 <script>
    let saveFile = () => {
    	// reference :https://www.websparrow.org/web/how-to-create-and-save-text-file-in-javascript
        // Get the data from each element on the form.
    	const name = document.getElementById('first-name');
      
    
        
        // Convert the text to BLOB.
        const textToBLOB = new Blob([data], { type: 'text/plain' });
        const sFileName = 'formData.txt';	   // The file to save the data.

        let newLink = document.createElement("a");
        newLink.download = sFileName;

        if (window.webkitURL != null) {
            newLink.href = window.webkitURL.createObjectURL(textToBLOB);
        }
        else {
            newLink.href = window.URL.createObjectURL(textToBLOB);
            newLink.style.display = "none";
            document.body.appendChild(newLink);
        }

        newLink.click(); 
    }
</script>




<!-- function to convert input into blob and generate url that can be downloaded by the user --> 		 
<script type="text/javascript">
 
function saveTextAsFile()
{
//reference https://www.codegrepper.com/code-examples/javascript/javascript+write+to+text+file 
    var textToSave1 = document.getElementById("first-name").value;
	var textToSave2 = document.getElementById("last-name").value;
	var textToSave3 = document.getElementById("email").value;
    var textToSave = "FirstName: "+ textToSave1+  "     LastName: " + textToSave2+"    Email: "+textToSave3;
    var textToSaveAsBlob = new Blob([textToSave], {type:"text/plain"});

    var textToSaveAsURL = window.URL.createObjectURL(textToSaveAsBlob);
	 
    var fileNameToSaveAs =  document.getElementById("last-name").value  ;


 
    var downloadLink = document.createElement("a");
    downloadLink.download = fileNameToSaveAs;
    downloadLink.innerHTML = "Download File";
    downloadLink.href = textToSaveAsURL;
    downloadLink.onclick = destroyClickedElement;
    downloadLink.style.display = "none";
    document.body.appendChild(downloadLink);
 
    downloadLink.click();
}
 
function destroyClickedElement(event)
{
    document.body.removeChild(event.target);
}
 </script>
 
 <!-- function that writes data into the txt file ---> 
 
 <script type="text/javascript">	  
	//reference https://www.codegrepper.com/code-examples/javascript/javascript+write+to+text+file 	  
    function WriteToFile(passForm) { 
 
    set fso = CreateObject("Scripting.FileSystemObject");  
    set s   = fso.CreateTextFile("C/data.txt", True); 
 
    var firstName = document.getElementById('first-name'); 
    var lastName  = document.getElementById('last-name'); 
 
    s.writeline("First Name :" + FirstName); 
    s.writeline("Last Name :" + lastName); 
 
    s.writeline("-----------------------------"); 
    s.Close(); 
 } 
 </script>



 


	
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



