<?php
require 'config/db.php';

$id = $_GET["id"];

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM data_karya WHERE id='$id' ";
    $hasil_query = mysqli_query($conn, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($conn).
       " - ".mysqli_error($conn));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='admin-gallery-data';</script>";
    }
?>