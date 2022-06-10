<?php 
include 'connection.php';

$id = $_GET['id'];

$query = "DELETE FROM `trainer` WHERE id = $id";

mysqli_query($conn,$query);

header('location:trainer.php');

?>