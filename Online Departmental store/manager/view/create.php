<?php 
	if(!isset($_COOKIE['status'])){
		header('location: login.html');
	}
?>

<html>
<head>
	<title>Create New</title>
</head>
<body>
		<a href="home.php">Back</a> | 
		<a href="../controller/logout.php"> logout </a>

		
		<form action="../controller/regCheck.php" method="post" enctype="">
			<fieldset>
				<legend>ADD SELLER</legend>
				<table>
					<tr>
						<td>Name</td></tr>
						<tr>
						<td><input type="text" name="username" value=""></td>
					</tr>
					<tr>
						<td>ID</td>
						</tr>
						<tr>
						<td><input type="Number" name="id" value=""></td>
					</tr>
					
					<tr>
						<td>password</td></tr>
						<tr>
						<td><input type="password" name="password" value=""></td>
					</tr>
					<tr>
						<td>confirm_password</td></tr>
						<tr>
						<td><input type="password" name="confirm" value=""></td>
					</tr>
					<tr>
						<td>Phone_Number</td></tr>
						<tr>
						<td><input type="text" name="Pnumber" value=""></td>
					</tr>
					<tr>
						<td>Email</td></tr>
						<tr>
						<td><input type="email" name="email" value=""></td>
					</tr>
										<tr>
						<td>DOB</td></tr>
						<tr>
						<td><input type="date" name="dob" value=""></td>
					</tr>
					<tr>
						<td>Address</td></tr>
						<tr>
						<td >
							<textarea style="height: 70px;width: 180px;"></textarea>
						</td>
					</tr>
					<td><br></td>
					
					<tr>
						<td>
							<input type="submit" name="" value="SignUp">
							<a href="signup.html"> Signin </a>
						</td>
					</tr>
				</table>
			</fieldset>
		</form>

</body>
</html>