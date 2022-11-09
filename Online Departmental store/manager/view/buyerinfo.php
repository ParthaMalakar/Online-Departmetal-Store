<?php
require('header.php');
require('../model/userModel.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Buyer Information</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<style>
  
  
</style>
<body id="buyerinfobg">
<div class="centerDesign">
<h2 align="center" style="color:crimson"><b>Buyer Information </b></h2>
	<table border="1" >
		<tr>
			<th>Name</th>
			<th>Age</th>
			<th>National ID</th>
			<th>Password</th>
			<th>Phone number</th>
			<th>Email</th>
			<th>Dob</th>
			<th>User Type</th>
			

		</tr>
</div>

		<?php 
			
			 $con = getConnection();
			 $sql = "SELECT * from buyer where User_Type='Buyer'";
			 $result = $con->query($sql);
			  if($result !== false && $result->num_rows > 0){
				
			 while($row = $result->fetch_assoc()) {

		?>
		<tr>
			<td><?=$row["Name"]?></td>
			<td><?=$row["Age"]?></td>
			<td><?=$row["National_ID"]?></td>
            <td><?=$row["Password"]?></td>
             <td><?=$row["Phone_Number"]?></td>
            <td><?=$row["Email"]?></td>
            <td><?=$row["DOB"]?></td>
			<td><?=$row["User_Type"]?></td>
			
			
		</tr>

		<?php 

			}
		}
				?>
		
	</table>

     
	<a class="infomargin" href="home.php">Back</a> <br>
	<a href="../controller/logout.php"> logout </a><br> 
</body>
</html>