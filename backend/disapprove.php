<?php 
include 'connection.php';

$id = $_GET['id'];

$query = "UPDATE advance_register set status= 'UNVERIFIED' WHERE id = $id";

mysqli_query($conn,$query);

header('location:dashboard.php');

?>