<?php

include('../database/koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM kategori WHERE id_kategori = '$id'";

if($connection->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>