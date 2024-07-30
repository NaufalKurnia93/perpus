<?php

//include koneksi database
include('../database/koneksi.php');

//get data dari form
$id_kategori           = $_POST['id_kategori'];
$nama                 = $_POST['nama_kategori'];
$jenis_kategori       = $_POST['jenis_kategori'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE kategori SET nama_kategori = '$nama', jenis_kategori = '$jenis_kategori'  WHERE id_kategori = '$id_kategori'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>