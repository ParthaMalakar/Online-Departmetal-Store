<?php 
require('../view/header.php');
require('../model/db.php');

		if(isset($_POST['search'])){
		
			$username = $_POST['search'];
		
			if($username != null){
					$_SESSION['search']=$username;
					header('location: ../view/SearchBuyer.php');
				}
				else
				{
					echo("null submission ....");
				}
				
		
			}else{
				echo("null submission ....");
			}
		