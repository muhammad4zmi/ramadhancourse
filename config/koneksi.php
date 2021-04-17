<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$db       = "blog";

$connect = mysqli_connect($hostname, $username, $password, $db);

if(!$connect){
    echo "Koneksi Database gagal!";
}
