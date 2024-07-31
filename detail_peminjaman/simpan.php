<?php

//include koneksi database
include('../database/koneksi.php');

//get data dari form
$peminjaman           = $_POST['id_peminjaman'];
$buku                 = $_POST['id_buku'];
$denda                = $_POST['denda'];


//query insert data ke dalam database
$query = "INSERT INTO peminjaman_detail ( id_peminjaman, id_buku, denda ) VALUES ('$peminjaman', '$buku', '$denda' )";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!". $connection-> error;

}

?>