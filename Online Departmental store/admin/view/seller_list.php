
<?php 
require('header.php');
require('../model/userModel.php');
//$username=$_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>

 <script src="../JS/seller.js"></script>
    <title>Seller list</title>
	<link rel="stylesheet" href="css/style4.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<h2 align="center"><b>Seller List</b></h2>
	<table border="1" align="center" id="customers">
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
				<input type="button" id="VIEW" value="VIEW" name="VIEW" onclick="return viewSprofiletag(<?php echo $row['ID'];?>)">

				<input type="button" id="EDIT" value="EDIT" name="EDIT" onclick="return editSprofiletag(<?php echo $row['ID'];?>)">
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