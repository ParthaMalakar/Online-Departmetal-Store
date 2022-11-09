<?php
require('header.php');
require('../model/db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <script src="../JS/buyer.js"></script>
    <title>Buyer information</title>
	<link rel="stylesheet" href="css/style4.css">
	<link rel="stylesheet" href="css/style.css">
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
			<th>Action</th>

		</tr>

		<?php 
			 $value=$_SESSION['search'];
			 $con = getConnection();
			 $sql = "SELECT * from buyer where (Name ='{$value}'or National_Id='{$value}' or Email='{$value}') and User_Type='Buyer'";
			 $result = $con->query($sql);
			  if($result !== false && $result->num_rows > 0){
				echo('<h2 style="color:black;">Found</h2>');
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
				<input type="button" id="VIEW" value="verify" name="VIEW" onclick="return verify(<?php echo $row['National_ID'];?>)">
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