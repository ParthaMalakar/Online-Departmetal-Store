
<?php 
require('header.php');
require('../model/db.php');
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
	<a href="home.php"> Back </a> | 
	<a href="../controller/logout.php"> logout </a>
<h2><b>Seller List</b></h2>
	<table border="1">
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
				<input type="button" id="Block" value="Block" name="Block" onclick="return blockseller(<?php echo $row['ID'];?>)">

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
			<a href="BlockList_and_Unblock.php"> See BlockList </a>
		</tr>
</body>
</html>