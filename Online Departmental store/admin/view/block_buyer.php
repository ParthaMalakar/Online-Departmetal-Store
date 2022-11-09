
<?php 
require('header.php');
require('../model/userModel.php');
//$username=$_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script src="../JS/buyer.js"></script>

    <title>BUYER list</title>
	<link rel="stylesheet" href="css/style4.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<a href="home.php"> Back </a> | 
	<a href="../controller/logout.php"> logout </a>
<h2><b>Buyer List</b></h2>
	<table border="1">
		<tr>
			<th>Name</th>
			<th>Age</th>
			<th>National_ID</th>
			<th>Password</th>
			<th>Phone number</th>
			<th>Email</th>
			<th>Date of Birth</th>
			<th>Action</th>
		</tr>

		<?php 
			$con = getConnection();
			$sql = "SELECT * FROM buyer where User_Type='Buyer'";
			$result = $con->query($sql);
			if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
		?>
		<tr>
			<td ><?=$row["Name"]?></td>
			<td ><?=$row["Age"]?></td>
			<td ><?=$row["National_ID"]?></td>
			<td ><?=$row["Password"]?></td>
			<td ><?=$row["Phone_Number"]?></td>
            <td ><?=$row["Email"]?></td>
            <td ><?=$row["DOB"]?></td>
			
			<td>
				<input type="button" id="BLOCK" value="BLOCK" name="BLOCK" onclick="return blockbuyer(<?php echo $row['National_ID'];?>)">

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
	<br><br>
    <tr>
			<a href="BlockList_for_buyer.php"> See BlockList </a>
		</tr>
</body>
