
<?php 
require('header.php');
require('../model/userModel.php');
//$username=$_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript" src="script.js"></script>

    <title>Seller list</title>
</head>
<body>
<h2 align="center"><b>Seller List</b></h2>
	<table border="1" align="center" id="customers">
		<tr>
			<th>Name</th>
			<th>ID</th>
			<th>Problem Description</th>
			<th>Action</th>
		</tr>

		<?php 
			$con = getConnection();
			$sql = "SELECT * FROM buyer_problem ";
			$result = $con->query($sql);
			if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
		?>
		<tr>
			<td ><?=$row["Buyer_name"]?></td>
			<td ><?=$row["National_ID"]?></td>
			<td ><?=$row["Problem_description"]?></td>
			<td>
				<a href="Sovle.php?id=<?=$row["National_ID"] ?>"> "Solve problem" </a>
				

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