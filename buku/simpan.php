<?php

//include koneksi database
include('../database/koneksi.php');

//get data dari form
$judul                = $_POST['judul'];
$kategori            = $_POST['id_kategori'];
$penulis             = $_POST['id_penulis'];
$penerbit              = $_POST['penerbit'];
$tahun_terbit      = $_POST['tahun_terbit'];

// // tampilkan nilai variable
// echo "Nama: " . $nama . "<br>";
// echo "jabatan: " . $jabatan . "<br>";
// echo "alamat: " . $alamat . "<br>";
// echo "shift: " . $shift . "<br>";
// echo "jenis kelamin: " . $jenis_kelamin . "<br>";


//query insert data ke dalam database
$query = "INSERT INTO buku ( judul, id_kategori, id_penulis, penerbit, tahun_terbit) VALUES ('$judul', '$kategori', '$penulis', '$penerbit', '$tahun_terbit')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!" . $connection->error;
    // $connection->error;

}

?>