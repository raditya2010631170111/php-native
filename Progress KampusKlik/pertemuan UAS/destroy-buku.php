<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM buku WHERE id = '$id'"; //id is name of column, $id is the code

if($connection->query($query)) {
    header("location: index-buku.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>