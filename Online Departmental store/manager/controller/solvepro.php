<?php
require('../view/header.php');
//require('../model/userModel.php');
require_once('../model/userModel.php');

$id = $_REQUEST['id'];
//$name = $_REQUEST['name'];
$nid = $_REQUEST['userid'];
//$nid = $_REQUEST['nid'];		
		
		
			$status = solve($nid,$id);
			if($status)
			{
				header('location: ../view/contact_Buyer_Html.php');
			}
			else
			{
				echo"Samething error......!!!";
			}
		
	

?>