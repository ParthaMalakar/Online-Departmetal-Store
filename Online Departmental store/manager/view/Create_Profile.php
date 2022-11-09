<?php 
require('header.php');
require('../model/userModel.php');
?>
<html>

<head>
<link rel="stylesheet" href="css/style.css">
    <title> Manager Own profile</title>

</head>

<body id="createProfile">
    <div>
    <form name=''method="POST" action="../controller/manager_profile_update.php" enctype="multipart/form-data" align="center">
        
        <table border="1" colspan="3" align="center">
            <h2>MANAGER PROFILE</h2>
           

           <?php 
            $con = getConnection();
            $sql = "SELECT * FROM user where User_Type='Manager'";
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
                    echo("Something wrong... please try again....!");
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