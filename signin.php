<?php 

$host="localhost";
$user="root";
$password="";
$db="signin";

$conn = new mysqli($host, $user, $password, $db); 



if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from users where username='".$uname."'AND password='".$password."' limit 1";
    
    $result = $conn->query($sql);
    
    if(mysqli_num_rows($result)==1){
         // echo " Login Successful!!!";
		header("Location: /webass1/Patient_Information.html"); 
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password, Go back and retry !";
        exit();
    }
    header('Location: Homepage.html');    
}
?>

