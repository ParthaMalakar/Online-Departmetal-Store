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
<link rel="stylesheet" href="css/style.css">
    <title>Buyer Contact Information</title>
</head>
<body id="contactbuybg">
<form method="POST" action="../controller/buyermassege.php" enctype=""  align="center">
    <h2>Buyer Contact Information</h2>
            <table border="1" align="center" height="300" width="300">

            <tr align="center">
                 <tr align="center">
            <td>Name</td> 
            <td><input type="text" name="username" id="username" placeholder="Pnumber" value="<?=$row["Name"]?>"></td>
        </tr>
            <td>National Id</td> 
            <td><input type="text" name="userid" id="userid" placeholder="Pnumber" value="<?=$row["National_ID"]?>"></td>

        </tr> 
          </tr>
            <td>Phone_Number</td> 
            <td><input type="text" name="name" id="" value="<?=$row["Phone_Number"]?>"></td>

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