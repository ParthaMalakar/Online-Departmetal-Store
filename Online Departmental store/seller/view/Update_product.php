<?php 
	require('header.php');
    require('../model/db.php');
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
</head>
<body>
	<a href="home.php"> Back </a> | 
	<a href="../controller/logout.php"> logout </a>
    <h2>Update Product</h2>
     <form method="POST" action="../controller/producUpdateCheck.php" enctype="multipart/form-data" >
            <table border="1" align="center" height="300" width="300">
            <tr align="center">
            <td>

            <input type="text" name="Product_ID" id="Product_ID" placeholder="Product_ID" value="<?=$row["Product_ID"]?>">

            <input type="text" name="Product_Name" id="Product_Name" placeholder="Product_Name" value="<?=$row["Product_Name"]?>">
            <input type="text" name="Product_Price" id="Product_Price" placeholder="Product_Price" value="<?=$row["Product_Price"]?>">
             <input type="text" name="Product_Made_In" id="Product_Made_In" placeholder="Product_Made_In " value="<?=$row["Product_Made_In"]?>">
            <input type="date" name="Entry_Date" id="Entry_Date" placeholder="Entry_Date" value="<?=$row["Entry_Date"]?>"><br>
            <input type="submit" id="editseller" name="editseller" value="update">
            <a href="home.php">Back</a><br><br>
            </td>    
        </tr>    
        </table>
    </form>
	
</div>
</body>
</html>