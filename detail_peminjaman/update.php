<?php

//include koneksi database
include('../database/koneksi.php');

//get data dari form
$id_peminjaman_detail           = $_POST['id_peminjaman_detail'];
$peminjaman                     = $_POST['id_peminjaman'];
$buku                           = $_POST['id_buku'];
$denda                          = $_POST['denda'];


//query update data ke dalam database berdasarkan ID
$query = "UPDATE peminjaman_detail SET id_peminjaman = '$peminjaman', id_buku = '$buku', denda = '$denda' WHERE id_peminjaman_detail = '$id_peminjaman_detail'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>