<?php
    require 'config/db.php';
    // membuat variabel untuk menampung data dari form

    if (isset($_POST['id']) || isset($_POST['namalengkap']) || isset($_POST['email']) || isset($_POST['nim']) || isset($_POST['angkatan']) || isset($_POST['kelas'])) {
    $id               = $_POST['id'];
    $namalengkap      = $_POST['namalengkap'];
    $email            = $_POST['email'];
    $nim              = $_POST['nim'];
    $angkatan         = $_POST['angkatan'];
    $kelas            = $_POST['kelas'];

    while(true) {
        $query = "UPDATE users SET namalengkap = '$namalengkap', email = '$email', nim = '$nim', angkatan = '$angkatan', kelas = '$kelas'";
        $query .= "WHERE id = '$id'";
        $result = mysqli_query($conn, $query);
        // periska query apakah ada error
        if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($conn).
                " - ".mysqli_error($conn));
        } else {
          //tampil alert dan akan redirect ke halaman index.php
          //silahkan ganti index.php sesuai halaman yang akan dituju
          echo "<script>alert('Data berhasil diubah.');window.location='admin-usersConfig';</script>";
        }
      }
    }
?>