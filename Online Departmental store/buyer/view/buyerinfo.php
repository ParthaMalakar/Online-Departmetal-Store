<?php
require('header.php');
require('../model/userModel.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Buyer information</title>
</head>
<style>
    body
  
</style>
<body>
<h2 align="center" style="color:crimson"><b>BUYER</b></h2>
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
    <table align="center">
    <tr>
         <td>

         </td>
        </tr>
    </table>
</body>
</html>