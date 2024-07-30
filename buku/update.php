<?php

//include koneksi database
include('../database/koneksi.php');

//get data dari form
$id_petugas            = $_POST['id_petugas'];
$nama                  = $_POST['nama_petugas'];
$jabatan               = $_POST['jabatan']; 
$alamat                = $_POST['alamat'];
$shift                 = $_POST['shift']; 
$jenis_kelamin         = $_POST['jenis_kelamin']; 

//query update data ke dalam database berdasarkan ID
$query = "UPDATE petugas SET nama_petugas = '$nama', jabatan = '$jabatan', alamat = '$alamat', shift = '$shift', jenis_kelamin = '$jenis_kelamin' WHERE id_petugas = '$id_petugas'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>