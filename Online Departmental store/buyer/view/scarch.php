<?php 
/*	include('header.php');
	include_once('header.php');

	require('header.php');*/
	require_once('header.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript" src="script1.js"></script>
<link rel="stylesheet" type="text/css" href="css/search.css"> 
    <title>search and view</title>
    
</head>

<body>
	<a href="home.php">Back</a> | 
		<a href="../controller/logout.php"> logout </a>
    <form action="../controller/SearchCheck.php" method="POST" align="center" >
    	<fieldset>
				<legend>Search Product</legend>
    <div class="srch">
        <table >
        <tr>
        	
       <td>ID:</td> 
        <td><input type="search" name="search" id='search' placeholder="Search" id=""></td>
        
        <td><input type="button" value='SEARCH'name="btn"id ='submit' onclick="return serchpro()"/></td><td id=e></td>
        

    </tr> 

    </table>
    </fieldset>
    </form>
   

   <div>
    <span id='e1'></span>
    </div> 


</body>
</html>
