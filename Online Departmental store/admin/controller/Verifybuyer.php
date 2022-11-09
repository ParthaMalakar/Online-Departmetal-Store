<?php 
require('../view/header.php');
require('../model/db.php');
            $noticeEdit= $_GET['view'];
			$con = getConnection();
			$sql = "SELECT * FROM buyer where User_Type='Buyer' and National_ID='{$noticeEdit}'";
			$result = $con->query($sql);
			if ($result !== false && $result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
            $Name = $row['Name'];
            $Age = $row['Age'];
            $ID = $row['National_ID'];
            $Password = $row['Password'];
             $Phone_Number = $row['Phone_Number'];
             $Email = $row['Email'];
            $dob = $row['DOB'];
        
	}
	}	
	if ($Name != null && $Age != null  && $ID != null && $Password != null && $Phone_Number != null && $Email != null && $dob != null){
		if($Age>20){
	      header('location: ../view/verifyDone.php');
		}
		else{
			echo "invalid buyer";
		}
      }
      else{
      	echo "incomplete information";
      }
?>