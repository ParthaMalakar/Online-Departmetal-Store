<?php 

    require_once('db.php');

function login( $username, $password){
    $conn = getConnection();
    $sql = "select * from user where ID='{$username}' and Password='{$password}'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if($count >0 ){
        return true;
    }else{
        return false;
    }
}

function signup($users){
    $conn = getConnection();
   //$sql = "INSERT INTO user  VALUES ('', '{$user['username']}', '{$user['id']}', '{$user['Pnumber']}', '{$user['email']}', '{$user['dob']}')";
    $sql = "insert into `user` (`User_Type`,`Name`, `ID`, `Password`, `Phone_Number`, `Email`, `DOB` ) values('','{$users['username']}','{$users['id']}','{$users['password']}','{$users['Pnumber']}','{$users['email']}','{$users['dob']}')";
    if(mysqli_query($conn, $sql)){
        return true;
    }else{
        return false;
    }
}

    
function Addseller($users){
    $conn = getConnection();

   //$sql = "INSERT INTO user  VALUES ('', '{$user['username']}', '{$user['id']}', '{$user['Pnumber']}', '{$user['email']}', '{$user['dob']}')";
    $sql = "insert into `user` (`User_Type`,`Name`, `ID`,`Password` , `Phone_Number`, `Email`, `DOB` ) values('Seller','{$users['username']}','{$users['id']}','{$users['password']}','{$users['Pnumber']}','{$users['email']}','{$users['dob']}')";
    if(mysqli_query($conn, $sql)){
        return true;
    }else{
        return false;
    }
}
function pic_up_admin($des){
        $con = getConnection();
        $sql = "UPDATE `user` SET `img` = '$des' WHERE `user`.`ID` = 126";
        if(mysqli_query($con, $sql)){
            return true;
    }else{
        return false;
    }   
    }
 function sendmsg($id,$userid){
        $con = getConnection();
        $sql = "INSERT INTO message (Admin, Manager, Seller, Buyer,S_No,Massage_Send,Massage_for) VALUES ('', '', '$id', '','$userid','Manager','Seller')";
        if(mysqli_query($con, $sql)){
            return true;
    }else{
        return false;
    }   
    }
    function sendmsgbuyer($id,$userid){
        $con = getConnection();
        $sql = "INSERT INTO message (Admin, Manager, Seller, Buyer,S_No,Massage_Send,Massage_for) VALUES ('', '', '', '$id','$userid','Manager','Buyer')";
        if(mysqli_query($con, $sql)){
            return true;
    }else{
        return false;
    }  
    }
 function sendmsgadmin($id,$userid){
        $con = getConnection();
        $sql = "INSERT INTO message (Admin, Manager, Seller, Buyer,S_No,Massage_Send,Massage_for) VALUES ('$id', '', '', '','$userid','Manager','Admin')";
        if(mysqli_query($con, $sql)){
            return true;
    }else{
        return false;
    }   
    }
     function solve($nid,$id){
        $con = getConnection();
     
        $sql = "update buyer_problem set  Solution_From_Manager='{$id}'where National_ID='{$nid}'";
        if(mysqli_query($con, $sql)){
            return true;
    }else{
        return false;
    }   
    }
    function update_seller($ID,$Name,$Password,$Phone_Number,$Email,$DOB){
        $con = getConnection();
        $sql ="update user set  Name='{$ID}',Password='{$Password}', Phone_Number='{$Phone_Number}', Email='{$Email}',DOB='{$DOB}' where ID='{$Name}'";
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }   
    }
?>