<?php 
    require('header.php');
    require('../model/userModel.php');
    $noticeEdit= $_GET['id'];

    $con = getConnection();
    $sql = "SELECT * FROM buyer where National_ID='{$noticeEdit}'";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
?>

<html>
<head>
    <title>Edit seller</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<form method="POST" action="../controller/BUYERMessage.php" enctype=""  align="center">
    <h2>Buyer Contract INfromation</h2>
            <table class="cadmin"  border="1" align="center" height="300" width="300">

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
            <td><input type="text" name="userid" id="userid" value="<?=$row["National_ID"]?>"></td>

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
</div>
</body>
</html>