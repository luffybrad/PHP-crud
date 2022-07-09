<?php
//connecting page to db
include "connect.php";
//selecting specific row for deletion
if(isset($_GET["deleteusername"])){
    //variable declaration for specified tbl_row
    $username=$_GET['deleteusername'];
    //sql query
    $sql="delete from `crud` where username=$username";
    //variable for query execution
    $result=mysqli_query($conn,$sql);
    //checking successful query execution
    if($result){
        header("location:display.php");
    }
    else{
         die(mysqli_error($conn));
    }
}
?>