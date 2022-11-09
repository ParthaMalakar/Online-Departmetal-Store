<?php 
	//session_start();
require_once('header.php');
?>
<?php 
	if(isset($_COOKIE['status'])){
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>
	<link rel="stylesheet" href="css/style10.css">
	<link rel="stylesheet" href="css/style4.css">
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="script.js"></script>
</head>
<body id="bg1">
		<div id="div1">
			<h1><span style="color: rgb(147, 20, 220);">Welcome Home!</span> </h1> 
			
			
			<a class="clr" href="Create_Profile.php"> Add Own Profile </a> <br><br>
		
		
		

		<a class="clr" href="add_seller.php"> Add Seller </a> <br><br>
		<a class="clr" href="seller_list.php"> Seller List </a> <br> <br>
		<a class="clr" href="verify_Seller_profies.php"> Search and View Seller Profies </a><br> <br>
		<a class="clr" href="Block_Seller.php"> Block Seller </a><br> <br>
		<a class="clr" href="verify_buyer_profies.php">Scarch and Verify Buyer Profies </a><br><br>
        <a class="clr" href="block_buyer.php"> Block Buyer </a><br> <br>
		<a class="clr" href="Updateproduct.php"> Update Product Details </a><br> <br>
		<a class="clr" href="RemoveProduct.php"> Remove Product Details </a><br> <br>
		<a class="clr" href="See_Product_Details.php"> See Product Details </a><br> <br>
		<a class="clr" href="add_buyer.php"> Add Buyer </a><br> <br>
		<a class="clr" href="Add_Manager.php"> Add Manager </a><br> <br>
         <a class="clr" href="../controller/logout.php"> Logout </a><br> <br>
		</div>



		<?php } else{

			echo "invalid request";
		} ?>


		
</body>
</html>


