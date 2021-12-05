<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "nd";
$con = mysqli_connect($host,$user,$password,$database);
if (mysqli_connect_errno()){
    echo "connectio Fail :".mysqli_connect_errno();exit;
}

?>
