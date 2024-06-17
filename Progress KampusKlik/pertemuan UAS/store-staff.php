<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nama = $_POST['nama'];
$telefon = $_POST['telefon'];
$email = $_POST['email'];

//query insert data ke dalam database
$query = "INSERT INTO staff (nama, telefon, email) VALUES ('$nama', '$telefon', '$email')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index-staff.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>