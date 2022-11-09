<?php 
require('../view/header.php');
require('../model/productModel.php');

   
 $Product_ID = $_REQUEST['Product_ID'];
	$Product_Name = $_REQUEST['Product_Name'];
	$Product_Price = $_REQUEST['Product_Price'];
	$Product_Made_In = $_REQUEST['Product_Made_In'];
      $Entry_Date = $_REQUEST['Entry_Date'];
     if($Product_ID != null && $Product_Name != null && $Product_Price != null && $Product_Made_In != null && $Entry_Date != null )
    {
    
        $status = update_product($Product_ID,$Product_Name,$Product_Price,$Product_Made_In,$Entry_Date);
       if($status)
       {
           echo"Product Edit successfull.";
           header('location: ../view/Updateproduct.php');


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