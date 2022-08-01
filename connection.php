<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "emobilis";

//connecting to the database
$connect = new mysqli($servername, $username, $password, $database);

//checking connection
if($connect->connect_error){
    die("Connection has failed " . $connect->connect_error);
}else {
    echo "Connected successfully to the database";
}
?>
