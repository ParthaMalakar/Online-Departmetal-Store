<?php 
	session_start();
//$nid =$_REQUEST['nid'];
	if(isset($_COOKIE['status'])){
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
		<h1 class="welcome">Welcome Home!</h1>
		
		
		
     <div class="homeClass">
		
		<a href=" request_add_productHtml.php">Request For Add product </a><br> 
		<a href="seller_list.php"> Seller List </a> <br> 
		<a href="contact_admin.php"> Contact With System Administrator </a><br>
        <a href="RemoveProduct.php"> Request For Delete Product </a><br> 
		<a href="verifypayment.php">  Verify The Payment </a><br> 
		<a href="contact_Manager.php"> Contact With Manager</a><br> 
		<a href="contact_buyer.php"> Contact Buyer </a><br> 		 
		<a href="profileadd.php"> Can Add Own Profile </a><br> 
         <a href="Deleteaccount.php"> Delete MY account </a><br> 
         <a href="../controller/logout.php"> logout </a><br> 

	 </div>
</body>
</html>

<?php } else{

	echo "invalid request";
} ?>

