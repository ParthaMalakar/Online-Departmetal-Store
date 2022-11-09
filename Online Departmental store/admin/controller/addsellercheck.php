<?php 
	session_start();
	require_once('../model/userModel.php');

	  //$User_Type=$_REQUEST['users'];
	 #$fname = $_REQUEST['formname'];

$json = $_POST['data'];
$student = json_decode($json);
    $Name = $student->username;
    $Id = $student->id;
    $Password = $student->password;
    $Phone_Number = $student->Pnumber;
    $Email = $student->email;
    $DOB = $student->dob;

    if ($Name != null && $Id != null && $Password != null && $Phone_Number != null && $Email != null && $DOB != null) {
$users = ['username'=> $Name,'id'=> $Id, 'password'=>$Password,'Pnumber'=> $Phone_Number, 'email'=>$Email,'dob'=>$DOB,'type'=>'user'];

		$status =Addseller($users);
if($status){
echo("Buyer Edit successfull.");
}else{
	echo "invalid user!";
}          }

?>