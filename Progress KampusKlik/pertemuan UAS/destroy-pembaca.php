<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM pembaca WHERE id = '$id'"; //id is name of column, $id is the code

if($connection->query($query)) {
    header("location: index-pembaca.php");
    echo "Data mahasiswa berhasil dihapus";
} else {
    echo "Data mahasiswa gagal dihapus";
}

?>