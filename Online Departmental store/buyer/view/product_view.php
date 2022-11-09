<?php 
require('header.php');
require('../model/db.php');
require('../model/userModel.php');
//$username=$_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head><link rel="stylesheet" type="text/css" href="css/proview.css">
<script type="text/javascript" src="script.js"></script>
    <title>Product list</title>
</head>
<body>
<h2 align="center"><b>Product List</b></h2>
<div class="vpro">
	<table border="1" align="center">
		<tr>
			<th>Product_ID</th>
			<th>Product_Name</th>
			<th>Product_Price</th>
			<th>Product_Made_In</th>
			<th>Entry_Date</th>
			<th>Action</th>
		</tr>

		<?php 
			$con = getConnection();
			$sql = "SELECT * FROM product";
			$result = $con->query($sql);
			if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
		?>
		<tr>
			<td ><?=$row["Product_ID"]?></td>
			<td ><?=$row["Product_Name"]?></td>
			<td ><?=$row["Product_Price"]?></td>
			<td ><?=$row["Product_Made_In"]?></td>
            <td ><?=$row["Entry_Date"]?></td>
            
			
			<td>
				
				<a href="ProductView.php?id=<?=$row["Product_ID"]?>"> VIEW </a> 
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
	
    <a href="home.php" align="center">Back</a> | 
		<a href="../controller/logout.php"> logout </a>
		
		</table>
</body>
</html>