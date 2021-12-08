<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "nd";
$con = mysqli_connect($host,$user,$password,$database);
if (mysqli_connect_errno()){
    echo "connectio Fail :".mysqli_connect_errno();exit;
}
mysqli_set_charset($con,'UTF8');

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $con -> query("DELETE FROM user WHERE id=$id");
    header("location: qluser.php");
}
?>
