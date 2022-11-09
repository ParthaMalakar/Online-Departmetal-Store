<?php
require('header.php');
require('../model/userModel.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/style.css">
    <title>Buyer information</title>
</head>
<style>

  
</style>
<body id="conbuybg">
<div class="centerDesign">
<h2 align="center" style="color:crimson"><b>Buyer Contact</b></h2>
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
			<th>Action</th>

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
			
			<td>
				<a href="contact_buyer.php?id=<?=$row["National_ID"] ?>"> "Contact" </a>
				</td>
		</tr>

		<?php 
				}
			}
			else
			{
				echo("<h2>The table is empty.....</h2>");
			}
		?>
	</table>
	<div class="centerDesign infomargin">
	<a href="home.php">Back</a> 
		<a href="../controller/logout.php"> logout </a>
					</div>
</body>
</html>