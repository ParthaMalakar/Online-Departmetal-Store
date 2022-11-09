<?php 
require('../view/header.php');
require('../model/userModel.php');

 $Name = $_REQUEST['username'];
  $ID = $_REQUEST['id'];
  $Password = $_REQUEST['password'];
  $Product_Made_In = $_REQUEST['phonenumber'];
    $Entry_Date = $_REQUEST['email'];
    $rafa=$_REQUEST['dob'];
     if($Name != null && $ID != null && $Password != null && $Product_Made_In != null && $Entry_Date != null && $rafa != null)
    {
    
        $status = update_seller($Name,$ID,$Password,$Product_Made_In,$Entry_Date,$rafa);
       if($status)
       {
     
           header('location: ../view/seller_list.php');


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