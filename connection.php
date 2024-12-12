
<?php
//create database connection//


$servername = "localhost";
$username = "root";
$password = "";
$database = "demo";

$conn = mysqli_connect ($servername, $username, $password, $database);

if ($conn){
    echo "OK";
}else{
    echo "error";
}


?>