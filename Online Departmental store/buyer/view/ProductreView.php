<?php 
    require('header.php');
    require('../model/userModel.php');
    $noticeEdit= $_GET['id'];

    $con = getConnection();
    $sql = "SELECT * FROM product where Product_ID ='{$noticeEdit}'";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
?>

<html>
<head>
    <title>Send Review</title>
    <link rel="stylesheet" type="text/css" href="css/prorev.css"> 
</head>
<body>
<form method="POST" action="../controller/review.php" enctype=""  align="center">
    <h2>Review Product</h2>
    <div class="prorev">
            <table>

                 <tr>
            <td>Product_Price</td> 
            <td><input type="text" name="username" id="username" placeholder="Pnumber" value="<?=$row["Product_Price"]?>"></td>
        </tr>
            <td> Product_Name</td> 
            <td><input type="text" name="username" id="username" placeholder="Pnumber" value="<?=$row["Product_Name"]?>"></td>

        </tr> 
          </tr>
            <td>Product_ID</td> 
            <td><input type="text" name="userid" id="userid" value="<?=$row["Product_ID"]?>"></td>

        </tr> 
        <tr>
<td>Review:</td>
<td><input type="text" name="id" placeholder="Send a review" ><br>
<input type="submit" name="aubmit" value="Submit">
 <a href="contact_seller_Html.php">Back</a>
</td>        

        </tr> 
        </table>
    </form>

</body>
</html>