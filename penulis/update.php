<?php

//include koneksi database
include('../database/koneksi.php');

//get data dari form
$id_penulis    = $_POST['id_penulis'];
$nama        = $_POST['nama_penulis'];
$asal_negara       = $_POST['asal_negara'];
$jumlah_karya         = $_POST['jumlah_karya'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE penulis SET nama_penulis = '$nama', asal_negara = '$asal_negara', jumlah_karya = '$jumlah_karya' WHERE id_penulis = '$id_penulis'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>