<?php 
	//session_start();
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
<body id="homebg">
		<div class="centerDesign">

		<h2 >Welcome To The Manager Panel</h2>


		<h3>Welcome To The Home Page!</h3>




<a href="Create_Profile.php"> Create Own Profile </a><br>
<a href="contact_seller_Html.php"> Contact Seller </a><br> 
<a href="issue_solve_Html.php"> Solve Issuses </a><br> 
<a href="contact_Admin_Html.php"> Contact Admin </a><br> 
<a href="contact_Buyer_Html.php"> Contact Buyer </a><br> 
 <a href="register_seller.php"> Register Seller </a><br> 
<a href="buyerinfo.php"> Show Buyer List </a> <br> 
<a href="seller_list.php"> Update Seller's Information </a><br>

 


<a href="../controller/logout.php"> logout </a><br> 
		</div>
</body>
</html>

<?php } else{

	echo "invalid request";
} ?>

