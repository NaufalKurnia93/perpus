<?php

//include koneksi database
include('../database/koneksi.php');

//get data dari form
$nama           = $_POST['nama_penulis'];
$asal_negara         = $_POST['asal_negara'];
$jumlah_karya      = $_POST['jumlah_karya'];

//query insert data ke dalam database
$query = "INSERT INTO penulis ( nama_penulis, asal_negara, jumlah_karya) VALUES ('$nama', '$asal_negara', '$jumlah_karya')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>