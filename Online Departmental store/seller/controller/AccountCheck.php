<?php 
	session_start();
require_once('../model/userModel.php');
	$id = $_REQUEST['id'];
	$password= $_REQUEST['password'];

	if ($id == null || $password == null) {
		echo "invalid username/password <br>";
	}else{
		
		$status = DELETEACCOUNT($id, $password);

		if($status){
			setcookie('status', 'true', time()+3600, '/');
			//$nid = $_SESSION['id'];
			header('location: ../view/login.html?id=$id');
		}else{
			echo "invalid user!";
		}
		
	}



?>