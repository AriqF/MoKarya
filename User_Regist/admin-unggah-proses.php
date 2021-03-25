<?php
    require 'config/db.php';

  // membuat variabel untuk menampung data dari form
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
  $nama_gambar_baru = $angka_acak.'-'.$foto_karya; //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "INSERT INTO data_karya (judul, deskripsi, anggota,foto_karya) VALUES ('$judul', '$deskripsi', '$anggota', '$nama_gambar_baru')";
                  $result = mysqli_query($conn, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($conn).
                           " - ".mysqli_error($conn));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='admin-gallery-data';</script>";
                  }

            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='admin-unggah';</script>";
            }
} else {
   $query = "INSERT INTO data_karya (judul, deskripsi, anggota, , foto_karya) VALUES ('$judul', '$deskripsi', '$anggota', '$', null)";
                  $result = mysqli_query($conn, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($conn).
                           " - ".mysqli_error($conn));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='admin-gallery-data';</script>";
                  }
}
?>