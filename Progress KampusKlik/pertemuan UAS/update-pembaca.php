<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id      = $_POST['id'];
$nama    = $_POST['nama'];
$npm = $_POST['npm'];
$nohp   = $_POST['nohp'];
$program_studi   = $_POST['program_studi'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE pembaca SET nama = '$nama', npm = '$npm', nohp = '$nohp', program_studi = '$program_studi' WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index-pembaca.php");
    echo "Data mahasiswa berhasil diperbarui!";
} else {
    //pesan error gagal update data
    echo "Data mahasiswa gagal diperbarui!";
}

?>