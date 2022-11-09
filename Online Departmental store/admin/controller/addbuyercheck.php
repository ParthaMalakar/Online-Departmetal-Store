<?php 
	session_start();
	require_once('../model/buyerModel.php');

	  //$User_Type=$_REQUEST['users'];
	 #$fname = $_REQUEST['formname'];

$json = $_POST['data'];
$student = json_decode($json);
    $Name = $student->username;
    $age = $student->age;
    $Id = $student->id;
    $Password = $student->password;
    $Phone_Number = $student->Pnumber;
    $Email = $student->email;
    $DOB = $student->dob;

    if ($Name != null && $age != null && $Id != null && $Password != null && $Phone_Number != null && $Email != null && $DOB != null) {
$users = ['username'=> $Name,'age'=>$age,'id'=> $Id, 'password'=>$Password,'Pnumber'=> $Phone_Number, 'email'=>$Email,'dob'=>$DOB,'type'=>'buyer'];

		$status =Addbuyer($users);
if($status){
echo("Buyer add successfull.");
}else{
	echo "invalid user!";
}          }

?>