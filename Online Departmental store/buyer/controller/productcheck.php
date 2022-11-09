<?php 
require('../view/header.php');
require('../model/db.php');
require('../model/userModel.php');


        $id= $_GET['id'];

        $con = getConnection();
        $sql = "SELECT * FROM product where Product_ID ='{$id}'";
        $result = $con->query($sql);
        if($result !== false && $result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

            
            $Name = $row['Product_ID'];
            $Age = $row['Product_Name'];
            $National_ID = $row['Product_Price'];
            $Password = $row['Product_Made_In'];
             $Phone_Number = $row['Entry_Date'];
             

        }

		if ($Name != null && $Age != null  && $National_ID != null && $Password != null && $Phone_Number != null){
		
           $status = blockBUYER($Name,$Age,$National_ID,$Password,$Phone_Number);
           if($status)
           {
                
                    echo("added successfull...");
                  }
           
           else
           {
               echo"Samething error......!!!";
           }

   }else{
       echo "null submission ....";
   }
}
