<?php 

    function getConnection(){
        $host = 'localhost';
        $dbuser = 'root';
        $dbpassword = '';
        $dbname = 'seller';
        $con = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
        return $con; 
    }

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
function DELETEACCOUNT( $username, $password){
    $conn = getConnection();
    $sql = "DELETE  from user where ID='{$username}' and User_Type='Seller'";
   if(mysqli_query($conn, $sql)){
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
    $sql = "insert into `product` (`Product_ID`,`Product_Name`, `Product_Price`,`Product_Made_In` , `Entry_Date`) values('{$users['Product_ID']}','{$users['Product_Name']}','{$users['Product_Price']}','{$users['Product_Made_In']}','{$users['Entry_Date']}')";
    if(mysqli_query($conn, $sql)){
        return true;
    }else{
        return false;
    }
}
function sendmsg($id,$userid){
        $con = getConnection();
        $sql ="INSERT INTO message (Admin, Manager, Seller, Buyer,S_No,Massage_Send,Massage_for) VALUES ('', '', '$id', '','$userid','Seller','Buyer')";
        if(mysqli_query($con, $sql)){
            return true;
    }else{
        return false;
    }   
    }
    function sendmsgB($id,$userid){
        $con = getConnection();
        $sql = "INSERT INTO message (Admin, Manager, Seller, Buyer,S_No,Massage_Send,Massage_for) VALUES ('$id', '', '', '','$userid','Seller','Admin')";
        if(mysqli_query($con, $sql)){
            return true;
    }else{
        return false;
    }   
    
    }
    function sendmsgM($id,$userid){
        $con = getConnection();
        $sql = "INSERT INTO message (Admin, Manager, Seller, Buyer,S_No,Massage_Send,Massage_for) VALUES ('', '$id', '', '','$userid','Seller','Manager')";
        if(mysqli_query($con, $sql)){
            return true;
    }else{
        return false;
    }   
    }
function pic_up_admin($des,$id){
        $con = getConnection();
        $sql = "UPDATE `user` SET `img` = '$des' WHERE `user`.`ID` = '{$id}'";
        if(mysqli_query($con, $sql)){
            return true;
    }else{
        return false;
    }   
    }
  function remove_product($ID){
        $con = getConnection();
        $sql = "DELETE FROM product  WHERE Product_ID ='{$ID}'";
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }
?>