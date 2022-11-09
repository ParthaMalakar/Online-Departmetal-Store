<?php
require('../view/header.php');
require('../model/userModel.php');

	if(isset($_POST['up'])){
		//print_r($_FILES['myfile']);
		$id =$_REQUEST['id'];
		$src = $_FILES['profilepic']['tmp_name'];
		$des = '../img/'.$_FILES['profilepic']['name'];
		
		if(move_uploaded_file($src, $des)){
			$status = pic_up_admin($des,$id);
			if($status)
			{
				echo"Profile succesfully uploaded";
				?>
				<<!DOCTYPE html>
				<html>
				<head>
					<meta charset="utf-8">
					<meta name="viewport" content="width=device-width, initial-scale=1">
					<title></title>
					</head>
					<a href="../view/home.php">Back</a> | 
		       <a href="../controller/logout.php"> logout </a>
				<body>
				
				</body>
				</html>
			<?php	
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