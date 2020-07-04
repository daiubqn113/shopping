<?php 
$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'demo_project';
$conn = mysqli_connect($host,$user,$password,$db_name);
mysqli_set_charset($conn,'utf8');
?>