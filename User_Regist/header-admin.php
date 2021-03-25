<?php

require_once 'controllers/authController.php'; 

// verify user token
if (isset($_GET['token'])) {
    $token = $_GET['token'];
    verifyUser($token);
}

// verify user token from forgot password
if (isset($_GET['password-token'])) {
    $passwordToken = $_GET['password-token'];
    resetPassword($passwordToken);
}
//user not login
if (!isset($_SESSION['id'])) {
    header('location:login');
    exit();
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>MoKarya | Admin </title>
         <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
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
        <link href="../src/css/dashboard_admin.css" type="text/css" rel="stylesheet"> 

        <script src="../src/js/galleryScript.js"></script>
         
        <!--Google Fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Epilogue&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

        <!--Morris JS-->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

        <!--font awesome-->
        <script src="https://kit.fontawesome.com/babb4f3fd7.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #4527a4;">
            <a class="navbar-brand" href="#">Welcome, <?php echo $_SESSION['namalengkap']; ?> </a> 
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                    <li class="nav-item <?php if($currentPage =='dashboard'){echo 'active';}?>">
                        <a class="nav-link" href="admin-dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                    </li>
                    <li class="nav-item dropdown <?php if($currentPage =='galleryData' || $currentPage == 'previewGalery' || $currentPage =='uploadGallery_adm'){echo 'active';}?>">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-images"></i>  Gallery
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #4527a4;">
                            <a class="dropdown-item <?php if($currentPage =='galleryData'){echo 'active';}?>" href="admin-gallery-data">Gallery Data</a>
                            <!--<a class="dropdown-item <?//php if($currentPage =='previewGalery'){echo 'active';}?>" href="#">Preview Gallery</a>-->
                            <!--<div class="dropdown-divider"></div>-->
                            <a class="dropdown-item <?php if($currentPage =='uploadGallery_adm'){echo 'active';}?>" href="admin-unggah">Unggah Data Gallery</a>
                        </div>
                    </li>
                    <li class="nav-item <?php if($currentPage =='usersConfig'){echo 'active';}?>">
                        <a class="nav-link" href="admin-usersConfig"><i class="fas fa-users"></i> Users</a>
                    </li>
                    <li class="nav-item <?php if($currentPage =='profile'){echo 'active';}?>">
                        <a class="nav-link" href="admin-profile"><i class="fas fa-id-card"></i> Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index1?logout=1"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
                    </li>
                </ul>
            </div>
        </nav>