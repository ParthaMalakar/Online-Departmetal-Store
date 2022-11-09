<?php
require('../view/header.php');
//require('../model/userModel.php');
require_once('../model/userModel.php');

$id = $_REQUEST['id'];


$userid = $_REQUEST['userid'];		
		
		
			$status = sendmsg($id,$userid);
			if($status)
			{
				header('location: ../view/contact_admin.php');
			}
			else
			{
				echo"Samething error......!!!";
			}
		
	

?>