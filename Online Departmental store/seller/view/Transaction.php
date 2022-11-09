<?php 
require('header.php');
require('../model/userModel.php');
$Id = $_REQUEST['id'];
?>
<html>



<body>
    <div id="show1">
  
        
        <table border="1" colspan="3" align="center">
            <h2>YOUR PAYMENT</h2>
           

           <?php 
            $con = getConnection();
            $sql = "SELECT * FROM transaction where transaction_ID=$Id";
            $result = $con->query($sql);
            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
        ?>

        
          <h2>Your transaction is valid</h2><br>
          <h1>Payment Succesfully Done</h1>
            
            <?php
                    }
                }
                else
                {
                    echo("Your transaction is not found    ///"); 

                    echo("Please contact admin");
                }
            ?>
            
        </table>
            
            <br> 
       
            <a href="home.php" align="center" style="color:black;">Back</a>

    </form>
   </div>
</body>

</html>