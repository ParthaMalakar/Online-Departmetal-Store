<?php 
	session_start();

	$id = $_REQUEST['id'];


	if ($id == "admin" ) {
			//header('location: ../admin/index.php');
			header('location: ../Online_Departmental_Store/admin/view/login.html');
	}
	if ($id == "buyer" ) {
			header('location: ../Online_Departmental_Store/buyer/view/login.html');
	}
	if ($id == "seller" ) {
			header('location: ../Online_Departmental_Store/seller/index.php');
	}
    if ($id == "manager" ) {
			header('location: ../Online_Departmental_Store/manager/index.php');
	}
	else
	{
	echo "invalid user!";
	}


?>