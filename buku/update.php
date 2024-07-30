<?php

//include koneksi database
include('../database/koneksi.php');

//get data dari form
$id_buku                  = $_POST['id_buku'];
$judul                    = $_POST['judul'];
$kategori                 = $_POST['id_kategori']; 
$penulis                = $_POST['id_penulis'];
$penerbit                 = $_POST['penerbit']; 
$tahun_terbit             = $_POST['tahun_terbit']; 

//query update data ke dalam database berdasarkan ID
$query = "UPDATE buku SET judul = '$judul', id_kategori = '$kategori', id_penulis = '$penulis', penerbit = '$penerbit', tahun_terbit = '$tahun_terbit' WHERE id_buku = '$id_buku'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!" . $connection->error;
}

?>