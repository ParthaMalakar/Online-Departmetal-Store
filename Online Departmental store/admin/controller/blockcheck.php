<?php 
require('../view/header.php');
require('../model/db.php');
require('../model/userModel.php');
if(isset($_POST['block'])){

        $id= $_POST['id'];

        $con = getConnection();
        $sql = "SELECT * FROM user where ID='{$id}'";
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
		
            $status = block($Name,$ID,$Password,$Phone_Number,$Email,$dob);
           if($status)
           {
                $status = delete_user($ID);
                if($status){
                    echo("block successfull...");
                }
                else
                {
                    echo"Samething error......!!!";
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