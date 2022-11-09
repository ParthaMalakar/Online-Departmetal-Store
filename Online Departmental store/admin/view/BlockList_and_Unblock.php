
<?php 
require('header.php');
require('../model/db.php');
?>
<!DOCTYPE html>
<html>
<head>
 <script src="../JS/seller.js"></script>

    <title>list</title>
    <title>BLOCK LIST</title>
	<link rel="stylesheet" href="css/style4.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<h2  style="color:crimson"><b>Block List</b></h2>
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
			$sql = "SELECT * FROM block_list ";
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
				<input type="button" id="UNBLOCK" name="UNBLOCK" value="UNBLOCK" onclick="return unblock(<?php echo $row['ID'];?>)">
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
        <table align="center">
        <tr>
            <td>
            
            </td>
        </tr>
        </table>
    <a href="admin.php">Back</a>
</body>
</html>