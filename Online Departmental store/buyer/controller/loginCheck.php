<?php 
	session_start();

require_once('../model/userModel.php');
	$id = $_REQUEST['id'];
	$password= $_REQUEST['password'];
           $con = getConnection();
			$sql = "SELECT * FROM user where ID=$id";
		
	if ($id == null || $password == null) {
		echo "invalid username/password <br>";
	}else{
		
		$status = login($id, $password);

		if($status){
			setcookie('status', 'true', time()+3600, '/');
			header('location: ../view/home.php?id=<?=$row["ID"] ?>');
		}else{
			echo "invalid user!";
		}
		
	}



?>