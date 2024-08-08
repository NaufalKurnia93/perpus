<?php

include('../database/koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM peminjaman_detail WHERE id_peminjaman_detail = '$id'";

if($connection->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>