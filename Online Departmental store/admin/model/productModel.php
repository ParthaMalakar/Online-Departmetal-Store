<?php 

    require_once('db.php');
function update_product($Product_ID,$Product_Name,$Product_Price,$Product_Made_In,$Entry_Date){
        $con = getConnection();
        $sql = "update product set  Product_Name='{$Product_Name}',Product_Price='{$Product_Price}', Product_Made_In='{$Product_Made_In}', Entry_Date='{$Entry_Date}' where Product_ID='{$Product_ID}'";
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