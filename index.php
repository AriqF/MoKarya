<?php
  include 'User_Regist/config/db.php';

  $query = "SELECT * FROM data_karya ";
  $query_run = mysqli_query($conn, $query);

  $check_data_karya = mysqli_num_rows($query_run) > 0;
  $i = 0;
  if($check_data_karya)
  {
    while ($row_karya = mysqli_fetch_array($query_run)) {

      $judulKarya[$i] = $row_karya['judul'];

      $foto_karya[$i] = $row_karya['foto_karya'];
      $i++;
    }
  }
  else
  {
    echo "No Record Found";
  }
  //simpan data hasil query dalam array lalu echo 'title' di div dan echo 'gambar' di javascript
?>
<DOCTYPE html>
<html lang="en">
    <head>
        <title>MoKarya || Home Page</title>
         <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="icon" type="image/png" href="src/img/mokarya-logo.png">
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
        <link rel="stylesheet" type="text/css" href="src/css/indexStyle.css"/>

        <!--Google Fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Epilogue&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
        <style>
          .redirect-btn{
            text-decoration: none;
          }
          .redirect-btn:hover{
            color: white;
            text-decoration: none;
          }
        </style>
    </head> <!--#4527a4;-->
    <body>

      <!--NavBar-->
      <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #4527a4;">
        <a class="navbar-brand" href="#">MoKarya</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="User_Regist/login">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="User_Regist/register">Register</a>
            </li>
          </ul>
        </div>
      </nav>
      <!--Header-->
      <div class="content h-100">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <table class="table-sm">
              <tbody>
                <tr>
                  <table class="table-sm mx-auto ">
                    <tbody>
                      <tr>
                        <td>
                          <img src="src/img/work.png" id="vector1" class="fadeInLeft img-fluid">
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </tr>
                <tr class="spacer">

                </tr>
                <tr>
                  <table class="table-sm mx-auto">
                    <tbody>
                      <tr>
                        <td>
                          <h1 class="font-weight-semibold ml3 fadeInDown">MoKarya</h1>
                          <p class="lead fadeInRight">Website Projek Monitor Karya Mahasiswa <br> D4 Manajemen Informatika </p>
                          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" id="startbtn">
                            <a href="User_Regist/login" class="redirect-btn">Unggah Karya <!--Login Mhs--></a>
                          </button>
                          <div class="w-100"></div>
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id="startbtn2">
                            <a href="User_Regist/guest-gallery" class="redirect-btn">Lihat Gallery &#187 <!--To Gallery Page Guest--></a>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!--Gallery-->
      <div class="jumbotron gallery">
        <h2 class="text-center font-weight-semibold">Showcase Gallery</h3>
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide" id="img<?php echo 1?>"><?php echo $judulKarya[0]; ?></div> <!--nth-child(start from 4)--> <!--sliderPerView+1-->
            <div class="swiper-slide" id="img<?php echo 2?>"><?php echo $judulKarya[1]; ?></div>
            <div class="swiper-slide" id="img<?php echo 3?>"><?php echo $judulKarya[2]; ?></div>
            <div class="swiper-slide" id="img<?php echo 4?>"><?php echo $judulKarya[3]; ?></div>
            <div class="swiper-slide" id="img<?php echo 5?>"><?php echo $judulKarya[4]; ?></div>
            <div class="swiper-slide" id="img<?php echo 6?>"><?php echo $judulKarya[5]; ?></div>
            <div class="swiper-slide" id="img<?php echo 7?>"><?php echo $judulKarya[6]; ?></div>
            <div class="swiper-slide" id="img<?php echo 8?>"><?php echo $judulKarya[7]; ?></div>
            <div class="swiper-slide" id="img<?php echo 9?>"><?php echo $judulKarya[8]; ?></div>
          </div>
          <!-- Add Pagination -->
          <div class="swiper-pagination"></div>
          <!-- Add Arrows -->
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>

      </div>


      <div class="jumbotron footer fixed-footer" style="width: 100%; margin: 0">
        <div class="container-fluid text-center text-md-left">
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">

                    <h5 class="text-uppercase">Tentang Kami</h5>
                    <hr style="border-top: 1px solid white;">
                    <p>Website ini dibuat dengan tujuan memenuhi tugas mata kuliah Pemograman Web Lanjutan</p>
                </div>
                <hr class="clearfix w-100 d-md-none pb-3">
                <div class="col-md-3 mb-md-0 mb-3">
                    <h5 class="text-uppercase">Tim Kami</h5>
                    <hr style="border-top: 1px solid white;">
                    <ul class="list-unstyled" style="color: #ffffff;">
                        <li>
                            Ariq Fachry R
                        </li>
                        <li>
                            Deni Eka Aji J R
                        </li>
                        <li>
                            M. Alif Hidayatullah
                        </li>
                    </ul>
                </div>
            </div>
        </div>
      </div>
      <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
      <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
      <script>
        var swiper = new Swiper('.swiper-container', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflowEffect: {
              rotate: 50,
              stretch: 0,
              depth: 100,
              modifier: 1,
              slideShadows: true,
            },
          slidesPerView: 3,
          spaceBetween: 30,
          slidesPerGroup: 1,
          loop: false, // to fix the white bug
          loopFillGroupWithBlank: false, // to fix the white bug
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
          autoplay: {
          delay: 2500,
          disableOnInteraction: false,
           },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
        });
        document.getElementById('img1').style.backgroundImage = "url(User_Regist/gambar/<?php echo $foto_karya[0]?>)";
        document.getElementById('img2').style.backgroundImage = "url(User_Regist/gambar/<?php echo $foto_karya[1]?>)";
        document.getElementById('img3').style.backgroundImage = "url(User_Regist/gambar/<?php echo $foto_karya[2]?>)";
        document.getElementById('img4').style.backgroundImage = "url(User_Regist/gambar/<?php echo $foto_karya[3]?>)";
        document.getElementById('img5').style.backgroundImage = "url(User_Regist/gambar/<?php echo $foto_karya[4]?>)";
        document.getElementById('img6').style.backgroundImage = "url(User_Regist/gambar/<?php echo $foto_karya[5]?>)";
        document.getElementById('img7').style.backgroundImage = "url(User_Regist/gambar/<?php echo $foto_karya[6]?>)";
        document.getElementById('img8').style.backgroundImage = "url(User_Regist/gambar/<?php echo $foto_karya[7]?>)";
        document.getElementById('img9').style.backgroundImage = "url(User_Regist/gambar/<?php echo $foto_karya[8]?>)";
      </script>
    </body>

</html>
