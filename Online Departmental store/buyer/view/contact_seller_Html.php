
<?php 
require('header.php');
require('../model/userModel.php');
//$username=$_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript" src="script.js"></script>
<link rel="stylesheet" type="text/css" href="css/contsel.css">

    <title>Seller list</title>
</head>
<body>
<h2 align="center"><b>Seller List</b></h2>
	<table border="1" align="center" id="customers">
		<div class="conts">
		<tr>
			<th>Name</th>
			<th>ID</th>
			<th>Password</th>
			<th>Phone number</th>
			<th>Email</th>
			<th>Date of Birth</th>
			<th>Action</th>
		</tr>

		<?php 
			$con = getConnection();
			$sql = "SELECT * FROM user where User_Type='Seller'";
			$result = $con->query($sql);
			if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
		?>
		<tr>
			<td ><?=$row["Name"]?></td>
			<td ><?=$row["ID"]?></td>
			<td ><?=$row["Password"]?></td>
			<td ><?=$row["Phone_Number"]?></td>
            <td ><?=$row["Email"]?></td>
            <td ><?=$row["DOB"]?></td>
			
			<td>
				<a href="Contract_Seller.php?id=<?=$row["ID"] ?>"> Contact </a>
	


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
    
</body>
</html>