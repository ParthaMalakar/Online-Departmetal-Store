<?php 
	require_once('header.php');
	

?>

<html>
<head>
	<title>Create New</title>
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
		<a class="register"  href="home.php">Back</a> | 
		<a class="register"  href="../controller/logout.php"> logout </a>

		
		
			<div class="login">
				<fieldset>
					<legend>ADD Product</legend>
					<table class="cadmin" >
						<tr>
							<td>Product_ID</td></tr>
							<tr>
							<td><input type="text" id="Product_ID" name="Product_ID" value=""></td>
							<td id="p"></td>
						</tr>
						<tr>
							<td>Product_Name</td>
							</tr>
							<tr>
							<td><input type="text" id="Product_Name" name="Product_Name" value=""></td>
							<td id="a"></td>
						</tr>
						
						<tr>
							<td>Product_Price</td></tr>
							<tr>
							<td><input type="text" id="Product_Price" name="Product_Price" value=""></td>
							<td id="r"></td>
						</tr>
						
						<tr>
							<td>Product_Made_In</td></tr>
							<tr>
							<td><input type="text" id="Product_Made_In" name="Product_Made_In" value=""></td>
							<td id="t"></td>
						</tr>
						<tr>
							<td>Entry_Date</td></tr>
							<tr>
							<td><input type="date" id="Entry_Date" name="Entry_Date" value=""></td>
							<td id="h"></td>
						</tr>
						
						<td><br></td>
						
						<tr>
							<td>
								<input class="button" type="submit"id="Submit" name="Submit" value="Submit" onclick="return ajax()"/>>
								<a class="register" href="signup.html"> Signin </a>
							</td>
						</tr>
					</table>
				</fieldset>
		
			</div>
		

</body>
</html>