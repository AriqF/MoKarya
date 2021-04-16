<?php
    require 'config/db.php';

    // agar user tidak bisa akses
    if($_SESSION['usertype'] == "user"){
    header("location: 404");
    }

    // membuat variabel untuk menampung data dari form

    if (isset($_POST['id']) || isset($_POST['judul']) || isset($_POST['deskripsi']) || isset($_POST['anggota']) || isset($_POST['foto_karya'])) {
    $id         = $_POST['id'];
    $judul      = $_POST['judul'];
    $deskripsi  = $_POST['deskripsi'];
    $anggota    = $_POST['anggota'];
    $foto_karya = $_FILES['foto_karya']['name'];

    //cek dulu jika ada gambar produk jalankan coding ini
    if($foto_karya != "") {
      $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
      $x = explode('.', $foto_karya); //memisahkan nama file dengan ekstensi yang diupload
      $ekstensi = strtolower(end($x)); //manipulasi sebuah string menjadi huruf kecil.
      $file_tmp = $_FILES['foto_karya']['tmp_name'];   
      $angka_acak     = rand(1, 999);
      list($width, $height, $type, $attr) = getimagesize($file_tmp); 
      $nama_gambar_baru = $angka_acak.'-'.$foto_karya; //menggabungkan angka acak dengan nama file sebenarnya
          if(in_array($ekstensi, $ekstensi_diperbolehkan) === true && $width === 1920 && $height === 1080)  {     
                  move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                    // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                    $query = "UPDATE data_karya SET judul = '$judul', deskripsi = '$deskripsi', anggota = '$anggota', foto_karya = '$nama_gambar_baru'";
                    $query .= "WHERE id = '$id'";
                    $result = mysqli_query($conn, $query);
                    // periska query apakah ada error
                    if(!$result){
                      echo "<script>alert('Upload gagal');window.location='admin-gallery-data';</script>";
                        die ("Query gagal dijalankan: ".mysqli_errno($conn).
                            " - ".mysqli_error($conn));
                    } 
                    else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil diubah.');window.location='admin-gallery-data';</script>";
                    }
            } 
            elseif($width != 1920 || $height != 1080){
                echo "<script>alert('Gambar harus memiliki dimensi 1920x1080!');window.location='admin-gallery-data';</script>";
              }
            else {     
            //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='admin-unggah-edit';</script>";
            }
    } 
    else {
        $query = "UPDATE data_karya SET judul = '$judul', deskripsi = '$deskripsi', anggota = '$anggota'";
        $query .= "WHERE id = '$id'";
        $result = mysqli_query($conn, $query);
        // periska query apakah ada error
        if(!$result){
          echo "<script>alert('Upload gagal');window.location='admin-gallery-data';</script>";
            die ("Query gagal dijalankan: ".mysqli_errno($conn).
                " - ".mysqli_error($conn));
        } else {
          //tampil alert dan akan redirect ke halaman index.php
          //silahkan ganti index.php sesuai halaman yang akan dituju
          echo "<script>alert('Data berhasil diubah.');window.location='admin-gallery-data';</script>";
        }
      }
    }
?>