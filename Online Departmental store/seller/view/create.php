<?php 
	if(!isset($_COOKIE['status'])){
		header('location: login.html');
	}
?>

<html>
<head>
	<title>Create New</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
		<a class="register" href="home.php">Back</a> | 
		<a class="register" href="../controller/logout.php"> logout </a>

		
		<form action="../controller/regCheck.php" method="post" enctype="">
			<fieldset class="login">
				<legend>ADD SELLER</legend>
				<table class="cadmin">
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
							<input class="button" type="submit" name="" value="SignUp">
							<a class="register" href="signup.html"> Signin </a>
						</td>
					</tr>
				</table>
			</fieldset>
		</form>

</body>
</html>