<?php 
$server = "localhost";
$user   ="root";
$pass ="";
$database ="db_belajar";

$conn = mysqli_connect($server,$user,$pass,$database);

if (!$conn){
    die("gagal tersambung ke database");
}
?>