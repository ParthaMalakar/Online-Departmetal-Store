<?php
require('../view/header.php');
//require('../model/userModel.php');
require_once('../model/userModel.php');

$id = $_REQUEST['id'];


$userid = $_REQUEST['userid'];		
		
		
			$status = sendmsgadmin($id,$userid);
			if($status)
			{
				header('location: ../view/contact_Admin_Html.php');
			}
			else
			{
				echo"Samething error......!!!";
			}
		
	

?>