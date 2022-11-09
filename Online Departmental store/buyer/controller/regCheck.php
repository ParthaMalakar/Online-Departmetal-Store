<?php 
	session_start();
	require_once('../model/userModel.php');
$Name = $_REQUEST['username'];
	$Id = $_REQUEST['id'];
	$Password = $_REQUEST['password'];
	
    
	 $Phone_Number =$_REQUEST['Pnumber'];
	 $Email =$_REQUEST['email'];
	 $DOB=$_REQUEST['dob'];
	  //$User_Type=$_REQUEST['users'];
	 #$fname = $_REQUEST['formname'];
	

	if ($Name != null || $Id != null ||  $Password != null || $Phone_Number != null || $Email != null || $DOB != null) {
		
	
		$users = ['username'=> $Name,'id'=> $Id, 'password'=>$Password,'Pnumber'=> $Phone_Number, 'email'=>$Email,'dob'=>$DOB,'type'=>'user'];
		
		$status = signup($users);

		if($status){
			setcookie('status', 'true', time()+3600, '/');
			header('location: ../view/home.php');
		}else{
			echo "invalid user!";
		}
	
	}
	else{
		echo "invalid username/password <br>";
	}



?>