<?php
    
include("connection.php");
$id = $_GET['id'];

$sql = "DELETE FROM `company_new` WHERE id=$id";

mysqli_query($link,$sql);

header('location:list.php');

?>