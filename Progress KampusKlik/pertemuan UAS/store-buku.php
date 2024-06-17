<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nama = $_POST['nama'];
$isbn = $_POST['isbn'];
$unit = $_POST['unit'];

//query insert data ke dalam database
$query = "INSERT INTO buku (nama, isbn, unit) VALUES ('$nama', '$isbn', '$unit')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index-buku.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>