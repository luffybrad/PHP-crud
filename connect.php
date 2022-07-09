<?php
//creating connection variavble to db
$conn = new mysqli('localhost','root','3353','crudoperation');
if(!$conn){
        die(mysqli_error($conn));
}
?>