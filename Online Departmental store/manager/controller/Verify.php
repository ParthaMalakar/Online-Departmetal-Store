<?php 
	require_once('../view/header.php');
	session_start();
	$id= $_REQUEST['id'];
	$file = fopen('../model/buyer.txt', 'r');
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
<?php 
	
	
	
	if ($data[0] == null || $data[1] == null) {
		
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
		<h1></h1>
		
		
		

		
		
</body>
</html>

<?php } 
else{

	
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
		<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
		<h1>"Verified"</h1>
		<a href="../view/home.php"> Back </a> | 
		<a href="logout.php"> logout </a>
<?php
}
?>

