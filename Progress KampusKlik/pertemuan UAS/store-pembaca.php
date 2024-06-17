<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nama = $_POST['nama'];
$npm = $_POST['npm'];
$nohp = $_POST['nohp'];
$program_studi = $_POST['program_studi'];

//query insert data ke dalam database
$query = "INSERT INTO pembaca (nama, npm, nohp, program_studi) VALUES ('$nama', '$npm', '$nohp', '$program_studi')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index-pembaca.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>