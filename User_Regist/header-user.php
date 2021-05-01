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

// agar admin tidak bisa akses
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if($_SESSION['usertype'] == "admin"){
    header("location: 404");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>MoKarya | Dashboard</title>
         <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- icon -->
        <link rel="icon" type="image/png" href="../src/img/mokaya-icon.png">
        
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
            <a class="navbar-brand" href="#">Welcome,  <?php echo $_SESSION['namalengkap']; ?> </a> <!--add user session name- -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php if($currPage =='dashboard'){echo 'active';}?>">
                    <a class="nav-link" href="dashboard_user"><i class="fas fa-images"></i> Gallery</a>
                </li>
                <li class="nav-item dropdown dropdown-menu-dark <?php if($currPage =='data-karya' || $currPage =='unggah'){echo 'active';}?>">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-file-alt"></i> Karya
                    </a>
                    <div class="dropdown-menu" style="background-color: #4527a4;" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item <?php if($currPage =='unggah'){echo 'active';}?>"  href="unggah-karya"><i class="fas fa-upload"></i> Unggah</a>
                        <a class="dropdown-item <?php if($currPage =='data-karya'){echo 'active';}?>"  href="unggah-karya-data"><i class="fas fa-list-alt"></i> Data Karya</a>
                    </div>
                </li>
                <li class="nav-item <?php if($currPage =='profile'){echo 'active';}?>">
                    <a class="nav-link" href="profile-user"><i class="fas fa-id-card"></i> Profile</a>
                </li>        
                <li class="nav-item <?php if($currPage =='user-rating'){echo 'active';}?>">
                    <a class="nav-link" href="user-rating"><i class="fas fa-star-half-alt"></i> Rate Us</a>
                </li>         
                <li class="nav-item">
                    <a class="nav-link" href="index1?logout=1"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
                </li>
            </ul>
            </div>
        </nav>