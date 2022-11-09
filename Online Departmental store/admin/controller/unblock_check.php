<?php 
require('../view/header.php');
require('../model/db.php');
require('../model/userModel.php');
if(isset($_POST['unblock'])){

        $id= $_POST['id'];

        $con = getConnection();
        $sql = "SELECT * FROM block_list where ID='{$id}'";
        $result = $con->query($sql);
        if($result !== false && $result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {

            $Name = $row['Name'];
            $ID = $row['ID'];
            $Password = $row['Password'];
             $Phone_Number = $row['Phone_Number'];
             $Email = $row['Email'];
            $dob = $row['DOB'];
            }
        

	if ($Name != null && $ID != null && $Password != null && $Phone_Number != null && $Email != null && $dob != null){
		 $status = add_user($Name,$ID,$Password,$Phone_Number,$Email,$dob);
           if($status)
           {
                $status = unblock($ID);
                if($status){
                    echo("Unblock successfully.");
                }
                else{
                    echo("Samething error in database......!!!");
                }
               
           }
           else
           {
               echo"Samething error......!!!";
           }

   }else{
       echo "null submission ....";
   }
}
}

?>