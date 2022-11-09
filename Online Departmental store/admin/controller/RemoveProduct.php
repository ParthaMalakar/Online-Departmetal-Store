<?php 
require('../view/header.php');
require('../model/productModel.php');

   
 $Product_ID = $_REQUEST['Product_ID'];
	
     if($Product_ID != null)
    {
    
        $status = remove_product($Product_ID);
       if($status)
       {
           echo"Product remove successfull.";
           header('location: ../view/RemoveProduct.php');


       }
       else
       {
           echo"Samething error......!!!";
       }

    }

else{
   echo "null submission ....";
}
	




?>