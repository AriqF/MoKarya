<?php
    require 'config/db.php';

    $rating  = $_POST['rating'];
    $komentar = $_POST['komentar'];
    $query = "INSERT INTO user_rating (rating, komentar) VALUES ('$rating', '$komentar')";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($conn).
            " - ".mysqli_error($conn));
    } else {
        echo "<script>alert('Terima Kasih!');window.location='user-rating';</script>";
    }
?>