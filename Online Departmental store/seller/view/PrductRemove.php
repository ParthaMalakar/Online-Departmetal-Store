<?php 
	require('header.php');
    require('../model/userModel.php');
	$noticeEdit= $_GET['id'];

    $con = getConnection();
    $sql = "SELECT * FROM product where Product_ID='{$noticeEdit}'";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();

?>

<html>
<head>
<script type="text/javascript" src="script.js"></script>
	<title>update product</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<a class="register" href="home.php"> Back </a> | 
	<a class="register" href="../controller/logout.php"> logout </a>
 
    <h2 class="rp">Remove a Product</h2>
    <div class="login">
     
        <form method="POST" action="../controller/RemoveProduct.php" enctype="multipart/form-data" >
            
            <table class="cadmin" border="1">
                    <tr>
                            <td>Product_ID</td>
                            <td><input type="text" name="Product_ID" value="<?=$row["Product_ID"]?>">"></td>
                        </tr>
                        <tr>
                            <td>Product_Name</td>
                            <td><input type="text" name="Product_Name" value="<?=$row["Product_Name"]?>"></td>
                        </tr>
                        <tr>
                            <td>Product_Price</td>
                            <td><input type="text" name="Product_Price" value="<?=$row["Product_Price"]?>"></td>
                        </tr>
                        <tr>
                            <td>product_quantity</td>
                            <td><input type="text" name="Product_Made_In" value="<?=$row["Product_Made_In"]?>"></td>
                        </tr>
                         <tr>
                            <td>product_quantity</td>
                            <td><input type="text" name="Entry_Date" value="<?=$row["Entry_Date"]?>"></td>
                        </tr>
                    <tr>
                        <td></td>
                        <td><h3>Are you sure?</h3></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td> <input class="button" type="submit" id="editseller" name="editseller" value="Remove"></td>
                    </tr>
                </table>
        </form>
     </div>
	
</div>
</body>
</html>