<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "myapp";
$con = mysqli_connect ($host,$username,$password,$dbname);
if(!$con){
    die("CONNECTION FAILED: " . mysqli_connect_error ());
}