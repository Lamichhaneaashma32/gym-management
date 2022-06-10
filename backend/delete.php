<?php 
include 'connection.php';

$id = $_GET['id'];

$query = "DELETE FROM `advance_register` WHERE id = $id";

mysqli_query($conn,$query);

header('location:dashboard.php');

?>