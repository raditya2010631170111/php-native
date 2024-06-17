<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id      = $_POST['id'];
$nama    = $_POST['nama'];
$telefon = $_POST['telefon'];
$email   = $_POST['email'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE staff SET nama = '$nama', telefon = '$telefon', email = '$email' WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index-staff.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>