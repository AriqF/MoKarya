<?php
require 'config/db.php';

  // agar user tidak bisa akses
  if($_SESSION['usertype'] == "user"){
  header("location: 404");
  }

$id = $_GET["id"];

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM users WHERE id='$id' ";
    $hasil_query = mysqli_query($conn, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($conn).
       " - ".mysqli_error($conn));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='admin-usersConfig';</script>";
    }