<?php 
    require('header.php');
    require('../model/userModel.php');
    $noticeEdit= $_GET['id'];

    $con = getConnection();
    $sql = "SELECT * FROM buyer_problem where National_ID='{$noticeEdit}'";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
?>

<html>
<head>
    <title>Edit seller</title>
</head>
<body>
<form method="POST" action="../controller/solvepro.php" enctype=""  align="center">
    <h2>buyer Contract INfromation</h2>
            <table border="1" align="center" height="300" width="300">

            <tr align="center">
                 <tr align="center">
            <td>Name</td> 
            <td><input type="text" name="name" id="name" placeholder="Pnumber" value="<?=$row["Buyer_name"]?>"></td>
        </tr>

            <td>National Id</td> 
            <td><input type="text" name="userid" id="userid" placeholder="Pnumber" value="<?=$row["National_ID"]?>"></td>
    <td>Problem</td> 
            <td><input type="text" name="id" id="userid" placeholder="Pnumber" value="<?=$row["Problem_description"]?>"></td>
        
        <tr>
<td>Solution:</td>
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