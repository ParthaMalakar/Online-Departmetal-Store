<?php
require('../view/header.php');
require('../model/userModel.php');

	if(isset($_POST['up'])){
		//print_r($_FILES['myfile']);
		$src = $_FILES['profilepic']['tmp_name'];
		$des = '../img/'.$_FILES['profilepic']['name'];
		
		if(move_uploaded_file($src, $des)){
			$status = pic_up_admin($des);
			if($status)
			{
				header('location: ../view/Create_Profile.php');
			}
			else
			{
				echo"Samething error......!!!";
			}
		}else{
			header('location: ../view/Create_Profile.php?error=there is no photo for upload');
			
			echo "error";
		}
	}

?>