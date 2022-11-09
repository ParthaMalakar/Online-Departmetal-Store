<?php 
	session_start();
require_once('../model/userModel.php');
	$id = $_REQUEST['id'];
	$password= $_REQUEST['password'];

	if ($id == null || $password == null) {
		echo "invalid username/password <br>";
	}else{
		
		$status = login($id, $password);

		if($status){
			setcookie('status', 'true', time()+3600, '/');
			header('location: ../view/home.php');
		}else{
			echo "invalid user!";
		}
		
	}



?>