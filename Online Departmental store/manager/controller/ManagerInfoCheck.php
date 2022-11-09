<?php 
	session_start();
$Name = $_REQUEST['username'];
	$Id = $_REQUEST['id'];
	$Password = $_REQUEST['password'];
	
    
	 $Phone_Number =$_REQUEST['Pnumber'];
	 $Email =$_REQUEST['email'];
	 $DOB=$_REQUEST['dob'];
	 
	 #$fname = $_REQUEST['formname'];
	

	if ($Name == null || $Id == null ||  $Password == null || $Phone_Number == null || $Email == null || $DOB == null ) {
		echo "invalid username/password <br>";
	}else{
		$data = $Name."|".$Id."|".$Password."|".$Phone_Number."|".$Email."|".$DOB ."\r\n";
		$file = fopen('../model/Manager.txt', 'a');
		fwrite($file, $data);

			if($fname == "create"){
				header('location: ../view/home.php');	
			}else{
				header('location: ../view/home.php');
			}
	
	}



?>