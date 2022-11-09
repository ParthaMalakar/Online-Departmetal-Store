<?php 
    require('header.php');
    require('../model/userModel.php');
    $noticeEdit= $_GET['id'];

    $con = getConnection();
    $sql = "SELECT * FROM user where ID='{$noticeEdit}'";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/contsellr.css">
    <title>Contact seller</title>
</head>
<body>
<form method="POST" action="../controller/SellerMessage.php" enctype=""  align="center">
    <h2>Seller Contract Infromation</h2>
    <div class="contslr">
            <table border="1" align="center" height="300" width="300">

            <tr align="center">
                 <tr align="center">
            <td>Name</td> 
            <td><input type="text" name="username" id="username" placeholder="Pnumber" value="<?=$row["Name"]?>"></td>
        </tr>
            <td>Phone Number</td> 
            <td><input type="text" name="username" id="username" placeholder="Pnumber" value="<?=$row["Phone_Number"]?>"></td>

        </tr> 
          </tr>
            <td>ID</td> 
            <td><input type="text" name="userid" id="userid" value="<?=$row["ID"]?>"></td>

        </tr> 
        <tr>
<td>Send Message:</td>
<td><input type="text" name="id" placeholder="Send a Message" ><br>
<input type="submit" name="aubmit" value="Submit">
 <a href="contact_seller_Html.php" align="center" style="color:black;">Back</a>
</td>        

        </tr> 
        </table>
    </form>
</body>
</html>