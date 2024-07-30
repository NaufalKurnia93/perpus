<?php

//include koneksi database
include('../database/koneksi.php');

//get data dari form
$nama           = $_POST['nama_kategori'];
$jenis_kategori         = $_POST['jenis_kategori'];


//query insert data ke dalam database
$query = "INSERT INTO kategori ( nama_kategori, jenis_kategori ) VALUES ('$nama', '$jenis_kategori')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!" . $connection->error;

}

?>