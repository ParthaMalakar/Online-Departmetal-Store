<?php 
require('header.php');
require('../model/userModel.php');
?>
<html>

<head>
    <title> Admin Own profile</title>
    <link rel="stylesheet" type="text/css" href="../view/css/style.css">
    <link rel="stylesheet" href="css/style4.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body id="bg1">
    <div id="show1">
    <form name=''method="POST" action="../controller/Admin_profile_update.php" enctype="multipart/form-data" align="center">
        
        <table border="1" colspan="3" align="center">
            <h2>Admin PROFILE</h2>
           

           <?php 
            $con = getConnection();
            $sql = "SELECT * FROM user where User_Type='Admin'";
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
                <td> <?=$row["ID"]?></td>
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
            <input type="file" name="profilepic" accept="image/*"> 
            <input type="submit" name ="up" value="UPLOAD PROFILE PICTURE">
            <br> 
       
            <a href="home.php" align="center" style="color:black;">Back</a>

    </form>
   </div>
</body>

</html>