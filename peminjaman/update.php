<?php

//include koneksi database
include('../database/koneksi.php');

//get data dari form
$id_peminjaman          = $_POST['id_peminjaman'];
$anggota                = $_POST['id_anggota'];
$tanggal_pinjam         = $_POST['tanggal_pinjam'];
$tanggal_kembali        = $_POST['tanggal_kembali'];
$petugas                = $_POST['id_petugas'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE peminjaman SET id_anggota = '$anggota', tanggal_pinjam = '$tanggal_pinjam', tanggal_kembali = '$tanggal_kembali', id_petugas = '$petugas' WHERE id_peminjaman = '$id_peminjaman'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>