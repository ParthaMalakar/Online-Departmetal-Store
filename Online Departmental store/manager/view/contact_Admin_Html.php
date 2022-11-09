
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

    <title>Admin list</title>
</head>
<body id="contactAdminbg">
<div class="centerDesign">
<h2 align="center"><b>Admin List</b></h2>
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
</div>

		<?php 
			$con = getConnection();
			$sql = "SELECT * FROM user where User_Type='Admin'";
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
				<a href="Contract_admin.php?id=<?=$row["ID"] ?>"> "Contact" </a>
				

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
    <div class="centerDesign infomargin">
	<a href="home.php">Back</a> 
		<a href="../controller/logout.php"> logout </a>
					</div>
</body>
</html>