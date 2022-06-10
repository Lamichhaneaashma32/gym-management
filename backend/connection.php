<?php


$servername = "localhost";
$username = "root";
$password = "";
$database = "gym";


$conn = mysqli_connect($servername, $username, $password, $database);

if(mysqli_connect_error())
{
    echo "Cannot connect";
}
// else
// {
//     echo "Connected";
// }


?>