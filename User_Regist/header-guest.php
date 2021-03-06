<?php
    require 'config/db.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>MoKarya | Dashboard</title>
         <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- icon -->
        <link rel="icon" type="image/png" href="../src/img/mokarya-logo.png">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

        <!--Swiper JS-->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

        <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <!--My css-->
        <link href="../src/css/dashboard_user.css" type="text/css" rel="stylesheet">
        <link href="../src/css/user_ratingStyle.css" type="text/css" rel="stylesheet">

        <!--Swiper.js-->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

        <!--sweet alert-->
        <script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
        <script src="sweetalert2.all.min.js"></script>
        <!-- Optional: include a polyfill for ES6 Promises for IE11 -->

        <!--Google Fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Epilogue&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

        <!--font awesome-->
        <script src="https://kit.fontawesome.com/babb4f3fd7.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #4527a4;">
            <a class="navbar-brand" href="#">Welcome, Guest</a> <!--add user session name- -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php if($currPage =='gallery'){echo 'active';}?>">
                    <a class="nav-link" href="guest-gallery"><i class="fas fa-images"></i> Gallery</a>
                </li>
                <li class="nav-item <?php if($currPage =='guest-rating'){echo 'active';}?>">
                    <a class="nav-link" href="guest-rating"><i class="fas fa-star-half-alt"></i> Rate Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register"><i class="fas fa-user-plus"></i> Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login"><i class="fas fa-sign-in-alt"></i> Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../"><i class="fas fa-home"></i> Home</a>
                </li>


            </ul>
            </div>
        </nav>
