<?php 
	require_once('header.php');
	$Id= $_REQUEST['id'];
	$file = fopen('../model/user.txt', 'r');
	$data = "";
	while(!feof($file)){
		$user = fgets($file);
		$user = explode('|', $user);
		if($user[1] == $Id){
			$data = $user;
			break;
		}
	}
	
	unset($user);
		
header('location: home.php');

?>