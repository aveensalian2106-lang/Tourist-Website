<?php
$host="localhost";
$user="root";
$pass="";
$db="touristwebsite";
$conn=mysqli_connect($host,$user,$pass,$db);

if(!$conn){
    die("sorry failed");
}
?>