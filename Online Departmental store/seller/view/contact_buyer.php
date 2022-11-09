<?php 
require('header.php');
require('../model/userModel.php');
//$username=$_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="script.js"></script>

	<title> list</title>
</head>

<body>
	<h2 align="center"><b>buyer List</b></h2>
	<table class="cadmin" border="1" align="center" id="customers">
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
			$sql = "SELECT * FROM buyer where User_Type='Buyer'";
			$result = $con->query($sql);
			if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
		?>
		<tr>
			<td><?=$row["Name"]?></td>
			<td><?=$row["National_ID"]?></td>
			<td><?=$row["Password"]?></td>
			<td><?=$row["Phone_Number"]?></td>
			<td><?=$row["Email"]?></td>
			<td><?=$row["DOB"]?></td>

			<td>
				<a href="Contract_buyer.php?id=<?=$row["National_ID"] ?>"> Contract </a>
				

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
 <a href="home.php" align="center" style="color:black;">Back</a>

</body>

</html>