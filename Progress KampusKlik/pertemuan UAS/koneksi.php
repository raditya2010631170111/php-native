<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "perpustakaan";    
// $connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

$connection = mysqli_connect("localhost", "root", "", "perpustakaan");

if($connection) {
    echo "Koneksi Berhasil!";
} else {
    echo "Koneksi Gagal! : ". mysqli_connect_error();
}

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}

?>
