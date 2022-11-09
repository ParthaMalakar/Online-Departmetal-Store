<?php
	$title="Delet User";
	include '../view/header.php';

	$id= $_REQUEST['id'];
	$file = fopen('../model/product.txt', 'r');
	$data = "";
	while(!feof($file)){
		$user = fgets($file);
		$user = explode('|', $user);
		if($user[0] == $id){
			$data = $user;
			break;
		}
	}
?>

	<h1>Delet user</h1>

	<nav>
		<a href="../view/home.php">Back</a> |
		<a href="logout.php">logout</a>
	</nav>
	
	<br>
	<div>
		<form method="post" action="../view/Remove.php">
			<input type="hidden" name="id" value="<?=$user['id']?>">
			<table border="1">
				<tr>
						<td>id</td>
						<td><input type="text" name="id" value="<?=$data[0]?>"></td>
					</tr>
					<tr>
						<td>product_name</td>
						<td><input type="text" name="product_name" value="<?=$data[1]?>"></td>
					</tr>
					<tr>
						<td>product_price</td>
						<td><input type="text" name="product_price" value="<?=$data[2]?>"></td>
					</tr>
					<tr>
						<td>product_quantity</td>
						<td><input type="text" name="product_quantity" value="<?=$data[3]?>"></td>
					</tr>
				<tr>
					<td></td>
					<td><h3>Are you sure?</h3></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="delete" value="Confirm"></td>
				</tr>
			</table>
		</form>
	</div>

	<br>
	<br>
