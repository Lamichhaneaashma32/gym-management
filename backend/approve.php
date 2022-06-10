<?php 
include 'connection.php';

$id = $_GET['id'];

$query = "UPDATE advance_register set status= 'VERIFIED' WHERE id = $id";

mysqli_query($conn,$query);

header('location:dashboard.php');

?>