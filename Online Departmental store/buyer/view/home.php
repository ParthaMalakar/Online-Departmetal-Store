<?php 
	session_start();
	
	if(isset($_COOKIE['status'])){
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="css/home.css">  
</head>
<body>
		<h1> Home Page</h1>
		<div class="home">

		<h3>Welcome To The Buyer Panel</h3>
		
		
		<a href="Profile_add.php"> create profile </a><br> 
		<a href="buy_product.php"> buy product </a><br> 
		<a href="verify_the_payment.php"> Payment Verify </a> <br> 
		<a href="provide_reviewHtml.php">  provide review </a><br>
        <a href="get_Admin_SupportHtml.php"> Get Admin Support </a><br> 
		<a href="product_view.php"> view Product </a><br> 
		<a href="scarch.php"> Search Product </a><br> 		
		<a href="contact_seller_Html.php"> Contact Seller </a><br> 
		<a href="add_to_cart.php"> Add to cart</a><br> 
		<a href="Cart_list.php"> MY cart</a><br> 		
		<a href="../controller/logout.php"> logout </a><br> 
</body>
</html>

<?php } else{

	echo "invalid request";
} ?>

