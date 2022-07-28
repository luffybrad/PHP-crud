<?php
//creating connection variavble to db
$conn = new mysqli('localhost','root','DB_PASSWORD','DB_NAME');
if(!$conn){
        die(mysqli_error($conn));
}
?>
