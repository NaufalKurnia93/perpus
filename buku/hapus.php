<?php

include('../database/koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM petugas WHERE id_petugas = '$id'";

if($connection->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>