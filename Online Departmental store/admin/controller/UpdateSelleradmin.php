<?php 
require('../view/header.php');
require('../model/userModel.php');



    $data = $_POST['data'];
    $data = json_decode($data);
      $username = $data->username;
      $password = $data->password;
      $id = $data->id;
   $phonenumber = $data->phonenumber;
   $email = $data->email;
    $dob = $data->dob;

     if($username != null && $id != null && $password != null && $phonenumber != null && $email != null && $dob != null) 
    {
    
        $status = update_seller($username,$id,$password,$phonenumber,$email,$dob);
       if($status)
       {
           echo"Seller Edit successfull.";
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