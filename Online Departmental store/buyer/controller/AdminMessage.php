<?php
require('../view/header.php');
//require('../model/userModel.php');
require_once('../model/userModel.php');

$id = $_REQUEST['id'];


$userid = $_REQUEST['userid'];		
		
		
			$status = sendmsgadmin($id,$userid);
			if($status)
			{
				header('location: ../view/home.php');
			}
			else
			{
				echo"Samething error......!!!";
			}
		
	

?>