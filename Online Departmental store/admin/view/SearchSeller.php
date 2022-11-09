<?php
require('header.php');
require('../model/db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>SELLER information</title>
	<link rel="stylesheet" href="css/style4.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<style>
    body
  
</style>
<body>
<h2 align="center" style="color:crimson"><b>Seller</b></h2>
	<table border="1" align="center">
		<tr>
			<th>Name</th>
			<th>ID</th>
			<th>Password</th>
			<th>Phone number</th>
			<th>Email</th>
			<th>Dob</th>
			<th>User Type</th>
			<th>Action</th>

		</tr>

		<?php 
			 $value=$_SESSION['search'];
			 $con = getConnection();
			 $sql = "SELECT * from user where (Name ='{$value}'or Id='{$value}' or Email='{$value}') and User_Type='Seller'";
			 $result = $con->query($sql);
			  if($result !== false && $result->num_rows > 0){
				echo('<h2 style="color:black;">Found</h2>');
			 while($row = $result->fetch_assoc()) {

		?>
		<tr>
			<td><?=$row["Name"]?></td>
			<td><?=$row["ID"]?></td>
            <td><?=$row["Password"]?></td>
             <td><?=$row["Phone_Number"]?></td>
            <td><?=$row["Email"]?></td>
            <td><?=$row["DOB"]?></td>
			<td><?=$row["User_Type"]?></td>
			<td>
				<input type="button" id="VIEW" value="VIEW" name="VIEW" onclick="return viewSprofiletag(<?php echo $row['ID'];?>)">
			</td>
			
		</tr>

		<?php 

			}
		}
		else{
			echo('<h2 style="color:black;">Not Found</h2>');
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