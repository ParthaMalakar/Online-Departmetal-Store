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
<link rel="stylesheet" href="css/style.css">
    <title>Solve Issuses</title>
</head>
<body id="solve">
<div class="centerDesign">
<form method="POST" action="../controller/solvepro.php" enctype=""  align="center">
    <h2>Buyer Contact Information</h2>
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

</td>        

        </tr> 
        </table>
    </form>

</div>


</div>

<div class="centerDesign infomargin">
	<a href="home.php">Back</a> 
		<a href="../controller/logout.php"> logout </a>
					</div>
</body>
</html>