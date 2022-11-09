<?php 
require('header.php');
require('../model/userModel.php');
?>
<html>

<head>
    <title> Seller profile</title>
    <link rel="stylesheet" href="css/style4.css">
	<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="script.js"></script>
</head>

<body>
       <form method="POST" action="" enctype="multipart/form-data" >
        
        <table border="1" colspan="3" >
            <h2>SELLER PROFILE</h2>
            <?php 
            $noticeEdit= $_GET['view'];
			$con = getConnection();
			$sql = "SELECT * FROM user where User_Type='Seller' and id='{$noticeEdit}'";
			$result = $con->query($sql);
			if ($result !== false && $result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
		?>
        
                 

            
            <tr>
                <td>Name: </td>
                <td> <?=$row["Name"]?></td>
            </tr>
            <tr>
                <td>id: </td>
                <td ><?=$row["ID"]?></td>
            </tr>
            <tr>
                <td>Password: </td>
               <td ><?=$row["Password"]?></td>
            </tr>
            <tr>
                <td>Phone_Number: </td>
              <td ><?=$row["Phone_Number"]?></td>
                
            </tr>
            <tr>
                <td>Email: </td>
               <td ><?=$row["Email"]?></td>
            </tr>
            <tr>
                <td>DOB: </td>
               <td ><?=$row["DOB"]?></td>
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
        <a href="home.php">Back</a> | 
        <a href="../controller/logout.php"> logout </a>

    </form>
   <div>
    <span id='e1'></span>
    </div>
</body>

</html>