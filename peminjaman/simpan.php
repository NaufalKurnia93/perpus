<?php

//include koneksi database
include('../database/koneksi.php');

//get data dari form
$nama_anggota           = $_POST['id_anggota'];
$tanggal_pinjam         = $_POST['tanggal_pinjam'];
$tanggal_kembali      = $_POST['tanggal_kembali'];
$nama_petugas      = $_POST['id_petugas'];

//query insert data ke dalam database
$query = "INSERT INTO peminjaman ( id_anggota, tanggal_pinjam, tanggal_kembali, id_petugas) VALUES ('$nama_anggota', '$tanggal_pinjam', '$tanggal_kembali', '$nama_petugas')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>