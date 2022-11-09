<?php 
	session_start();
	require_once('../model/userModel.php');

	  //$User_Type=$_REQUEST['users'];
	 #$fname = $_REQUEST['formname'];

$json = $_POST['data'];
$student = json_decode($json);
    $Product_ID = $student->Product_ID;
    $Product_Name = $student->Product_Name;
    $Product_Price = $student->Product_Price;
    $Product_Made_In = $student->Product_Made_In;
    $Entry_Date = $student->Entry_Date;
  

    if ($Product_ID != null && $Product_Name != null && $Product_Price != null && $Product_Made_In != null && $Entry_Date != null) {
$users = ['Product_ID'=> $Product_ID,'Product_Name'=> $Product_Name, 'Product_Price'=>$Product_Price,'Product_Made_In'=> $Product_Made_In, 'Entry_Date'=>$Entry_Date];

		$status =Addseller($users);
if($status){

			echo("Edit successfull.");
}else{
			echo "invalid user!";
		}

}

?>