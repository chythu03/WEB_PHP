<?php
    extract($_REQUEST);
    $file=fopen("userdata.txt","a");  // open the file and get ready to read the data 
   if( strpos(file_get_contents("./userdata.txt"),$_GET['phone']) !== false)    {    // if no same string as the phone number, then the user can go on inputing

      echo "Sorry, the phone number is already taken, Go Back and Try again" ; // generate error message, the user have to go back and type again.
	
            }
   else {
    
	
	if( strpos(file_get_contents("./userdata.txt"),$_GET['email']) !== false)    { // check if same email exist in the file, if not user can go on inputing 
		echo "Sorry, the email is already taken, Go Back and Try again" ;// generate error message . 
	}
	else {
		if( strpos(file_get_contents("./userdata.txt"),$_GET['Timeframe1']) !== false || strpos(file_get_contents("./userdata.txt"),$_GET['Timeframe2']) !== false ||strpos(file_get_contents("./userdata.txt"),$_GET['apointmenttime1']) !== false)    {
		echo "Sorry, The time you have chosen is not available. GO back and choose again. " ;  // Check if the user ordered the same date with same time if so generate error message. 
	  }
	   else {
		fwrite($file,"First Name :");
		fwrite($file, $fname ."\n");	
		fwrite($file,"Last Name :");
		fwrite($file, $lname ."\n");	
		fwrite($file,"Phone Number :");
        fwrite($file, $phone ."\n");
		fwrite($file,"Email :");
		fwrite($file, $email ."\n");
		fwrite($file,"Primary Desired Date  :");
		fwrite($file, $apointmenttime1  ."\n");	
		fwrite($file,"Secondary Desired Date  :");
		fwrite($file, $apointmenttime2 ."\n");	
		fwrite($file,"Primary Desired Timeframe  :");
		fwrite($file, $Timeframe1 ."\n");	
		fwrite($file,"Secondary Desired Timeframe  :");
		fwrite($file, $Timeframe2 ."\n");		
		fwrite($file,"Addational Message  :");
		fwrite($file, $message ."\n");	
		
		fclose($file);
		header("location: Login.php");
	   }
	}
      } 

        
    
 ?>