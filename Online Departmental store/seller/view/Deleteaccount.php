<!DOCTYPE html>
<html>

<head>
	<title>Delete own account</title>
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div>
		<form action=" ../controller/AccountCheck.php" method="post" enctype="">
			<div class="login">
				<fieldset>
					<legend class="admim">Enter Id and Password for delete your account</legend>
					<table>
						<tr>
							<td>User Id</td>
						</tr>
						<tr>
							<td><input type="text" name="id" value=""></td>
						</tr>
						<tr>
							<td>Password</td>
						</tr>
						<tr>
							<td><input type="password" name="password" value=""></td>
						</tr>


						<tr>
						<tr>
							<td>
								<hr>
							</td>
						</tr>
						<td>
							<input class="button" type="submit" name="" value="Delete">
						</td>
						</tr>
					</table>
				</fieldset>
			</div>
		</form>
	</div>
</body>

</html>