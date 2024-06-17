<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id   = $_POST['id'];
$nama = $_POST['nama'];
$isbn = $_POST['isbn'];
$unit = $_POST['unit'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE buku SET nama = '$nama', isbn = '$isbn', unit = '$unit' WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index-buku.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>