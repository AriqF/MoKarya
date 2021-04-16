<?php
    require 'config/db.php';

    $rating  = $_POST['rating'];
    $komentar = $_POST['komentar'];

    if($_POST['namalengkap'] === ""){
        $namalengkap = "guest";
    }
    else{
        $namalengkap = $_POST['namalengkap'];
    }
   
    $query = "INSERT INTO user_rating (rating, komentar, namalengkap) VALUES ('$rating', '$komentar', '$namalengkap')";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($conn).
            " - ".mysqli_error($conn));
    } else {
        echo "<script>alert('Terima Kasih!');window.location='guest-rating';</script>";
    }
?>