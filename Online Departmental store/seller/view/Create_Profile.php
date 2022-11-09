<?php 
require('header.php');
require('../model/userModel.php');
$Id = $_REQUEST['id'];
?>
<html>

<head>
    <title> Seller Own profile</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="show1">
        <form name='' method="POST" action="../controller/seller_profile_update.php" enctype="multipart/form-data"
            align="center">

            <table class="cadmin" border="1" colspan="3" align="center">
                <h2>Seller PROFILE</h2>


                <?php 
            $con = getConnection();
            $sql = "SELECT * FROM user where User_Type='Seller' and id=$Id";
            $result = $con->query($sql);
            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
        ?>


                <img src="<?=$row["img"]?>" height=200px width=180px alt="">


                <tr>
                    <td> Name: </td>
                    <td> <?=$row["Name"]?></td>
                </tr>
                <tr>
                    <td>ID: </td>

                    <td><input type="text" name="id" value="<?=$row["ID"]?>"> </td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><?=$row["Password"]?></td>
                </tr>
                <tr>
                    <td>Phone_Number: </td>
                    <td><?=$row["Phone_Number"]?></td>

                </tr>

                <tr>
                    <td>Email: </td>
                    <td><?=$row["Email"]?></td>
                </tr>

                <tr>
                    <td>DOB: </td>
                    <td><?=$row["DOB"]?></td>
                </tr>


                <?php
                    }
                }
                else
                {
                    echo("Something wrong... please try agin....!");
                }
            ?>

            </table>
            <input class="" type="file" name="profilepic" accept="image/*">
            <input class="updateProfile" type="submit" name="up" value="UPLOAD PROFILE PICTURE">
            <br>

            <a class="register" href="home.php" align="center">Back</a>

        </form>
    </div>
</body>

</html>