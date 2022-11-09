<?php 

    require_once('db.php');
function Addbuyer($users){
    $conn = getConnection();

   //$sql = "INSERT INTO user  VALUES ('', '{$user['username']}', '{$user['id']}', '{$user['Pnumber']}', '{$user['email']}', '{$user['dob']}')";
    $sql = "insert into `buyer` (`User_Type`,`Name`,`Age`,`National_ID`,`Password` , `Phone_Number`, `Email`, `DOB` ) values('Buyer','{$users['username']}','{$users['age']}','{$users['id']}','{$users['password']}','{$users['Pnumber']}','{$users['email']}','{$users['dob']}')";
    if(mysqli_query($conn, $sql)){
        return true;
    }else{
        return false;
    }
}
    function blockBUYER($Name,$Age,$National_ID,$Password,$Phone_Number,$Email,$dob){
        $con = getConnection();
        $sql = "INSERT into blockbuyer (User_Type,Name,Age,National_ID,Password,Phone_Number,Email,DOB) values ('Buyer','{$Name}','{$Age}','{$National_ID}','{$Password}','{$Phone_Number}','{$Email}','{$dob}')";
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }   
    }
    function delete_buyer($National_ID){
        $con = getConnection();
        $sql = "DELETE FROM buyer  WHERE National_ID ='{$National_ID}'";
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }
     function ADDUNBLOCKBUYER($Name,$Age,$National_ID,$Password,$Phone_Number,$Email,$dob){
        $con = getConnection();
        $sql = "INSERT into buyer (User_Type,Name,Age,National_ID,Password,Phone_Number,Email,DOB) values ('Buyer','{$Name}','{$Age}','{$National_ID}','{$Password}','{$Phone_Number}','{$Email}','{$dob}')";
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }   
    }
     function unblockBUYER($id){
        $con = getConnection();
        $sql = "DELETE FROM blockbuyer WHERE National_ID ='{$id}'";
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }
    ?>