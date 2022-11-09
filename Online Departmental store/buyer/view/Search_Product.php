<?php
require('header.php');
require('../model/db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Producat information</title>
</head>
<style>
    body
  
</style>
<body>
<h2 align="center" style="color:crimson"><b>Product</b></h2>
	<table border="1" align="center">
		<tr>
			
			<th>Product_ID</th>
			<th>Product_Name</th>
			<th>Product_Price</th>
			<th>Product_Made_In</th>
			<th>Entry_Date</th>
			

		</tr>

		<?php 
			 $value=$_SESSION['search'];
			 $con = getConnection();
			 $sql = "SELECT * from product where (Product_Name ='{$value}'or Product_ID='{$value}')";
			 $result = $con->query($sql);
			  if($result !== false && $result->num_rows > 0){
				echo('<h2 style="color:black;">Found</h2>');
			 while($row = $result->fetch_assoc()) {

		?>
		<tr>
			<td ><?=$row["Product_ID"]?></td>
			<td ><?=$row["Product_Name"]?></td>
			<td ><?=$row["Product_Price"]?></td>
			<td ><?=$row["Product_Made_In"]?></td>
            <td ><?=$row["Entry_Date"]?></td>
			<td>
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