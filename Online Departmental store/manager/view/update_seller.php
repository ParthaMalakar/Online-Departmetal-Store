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
<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="script.js"></script>
	<title>Update seller</title>
</head>
<body id="updateSellerbg">
  <div class="centerDesign">
  <form method="POST" action="../controller/UpdateSelleradmin.php" enctype="multipart/form-data"  align="center">
    <h2>Update Account For Seller</h2>
            <table border="1" align="center" height="300" width="300">
            <tr align="center">
            <td>

            <input type="text" name="username" id="username" placeholder="Create Username" value="<?=$row["Name"]?>">

            <input type="text" name="id" id="id" placeholder="ID" value="<?=$row["ID"]?>">
            <input type="text" name="password" id="password" placeholder="Create Password" value="<?=$row["Password"]?>">
             <input type="text" name="phonenumber" id="phonenumber" placeholder="Phone Number" value="<?=$row["Phone_Number"]?>">
            <input type="text" name="email" id="email" placeholder="Email" value="<?=$row["Email"]?>">
            <input type="date" name="dob" id="dob" value="<?=$row["DOB"]?>">
<br><br><br>
             <input type="submit" id="editseller" name="editseller" value="Edit">
            <a href="home.php">Back</a><br><br>
            </td>    
        </tr>    
        </table>
	</form>
  </div>
</div>
</body>
</html>