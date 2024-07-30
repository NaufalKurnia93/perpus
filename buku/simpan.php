<?php

//include koneksi database
include('../database/koneksi.php');

//get data dari form
$nama                = $_POST['nama_petugas'];
$jabatan            = $_POST['jabatan'];
$alamat             = $_POST['alamat'];
$shift              = $_POST['shift'];
$jenis_kelamin      = $_POST['jenis_kelamin'];

// tampilkan nilai variable
echo "Nama: " . $nama . "<br>";
echo "jabatan: " . $jabatan . "<br>";
echo "alamat: " . $alamat . "<br>";
echo "shift: " . $shift . "<br>";
echo "jenis kelamin: " . $jenis_kelamin . "<br>";


//query insert data ke dalam database
$query = "INSERT INTO petugas ( nama_petugas, jabatan, alamat, shift, jenis_kelamin) VALUES ('$nama', '$jabatan', '$alamat', '$shift', '$jenis_kelamin')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!"; 
    // $connection->error;

}

?>