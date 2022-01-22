<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName ="cabinetOfficiel";
$con = mysqli_connect($serverName,$userName,$password,$dbName);
if(mysqli_connect_errno()){
    echo "failed";
    exit();
}
echo "conn "
?>