<?php 
require('../view/header.php');
require('../model/db.php');
require('../model/buyerModel.php');
if(isset($_POST['unblock'])){

        $id= $_POST['id'];

        $con = getConnection();
        $sql = "SELECT * FROM blockbuyer where National_ID='{$id}'";
        $result = $con->query($sql);
        if($result !== false && $result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {

            $Name = $row['Name'];
            $Age = $row['Age'];
            $National_ID = $row['National_ID'];
            $Password = $row['Password'];
             $Phone_Number = $row['Phone_Number'];
             $Email = $row['Email'];
            $dob = $row['DOB'];
            }
        

	 if ($Name != null && $Age != null  && $National_ID != null && $Password != null && $Phone_Number != null && $Email != null && $dob != null){
  
		 $status = ADDUNBLOCKBUYER($Name,$Age,$National_ID,$Password,$Phone_Number,$Email,$dob);
           if($status)
           {
                $status = unblockBUYER($National_ID);
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