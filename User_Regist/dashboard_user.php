<!DOCTYPE html>
<html>
    <head>
        <title>MoKarya | Dashboard</title>
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
        <link href="../src/css/dashboard_user.css" type="text/css" rel="stylesheet"> 

        <!--Swiper.js-->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
         
        <!--Google Fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Epilogue&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

        <!--font awesome-->
        <script src="https://kit.fontawesome.com/babb4f3fd7.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #4527a4;">
            <a class="navbar-brand" href="#">Welcome, </a> <!--add user session name- -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="dashboard_user.php"><i class="fas fa-images"></i> Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="unggah-karya.php"><i class="fas fa-upload"></i> Unggah</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile-user.php"><i class="fas fa-id-card"></i> Profile</a>
                </li>               
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
                </li>
            </ul>
            </div>
        </nav>

        <div class="jumbotron gallery">
          <div class="container-fluid">
            <div class="px-lg-5">

              <div class="row py-5 fadeInRight">
                <div class="col-lg-12 mx-auto">
                  <div class="box p-5 shadow-sm rounded ">
                    <h1 class="display-4 fadeInDown">
                      Gallery Showcase 
                    </h1>
                    <p class="lead fadeInUp" style="font-size: 18px;">
                      Karya Yang Ditampilkan Disini Merupakan Hasil Karya Mahasiswa Program Studi D4
                    </p>
                  </div>
                </div>
              </div>

              <div class="row">

                <div class="col-xl-3 col-lg-4 col-md-6 mb-4 anim">
                  <div class="bg-white rounded shadow-sm">
                    <img src="../src/img/1.jpg" class="img-fluid card-img-top">
                    <div class="p-4">
                      <h5><a class="text-dark">Title 01</a></h5>
                      <p class="small text-muted mb-0"> <!--Desc goes here -->
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sagittis consequat ipsum, 
                        non pulvinar nulla sagittis id. 
                      </p>
                      <hr class="separator">
                      <p class="small text-muted mb-0">
                        <i class="fas fa-user-friends"></i> Anthony G, Tyo R , Poppy L
                      </p>
                      <hr class="separator">
                      <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                        <button class="btn btn-primary">Read More</button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 mb-4 anim">
                  <div class="bg-white rounded shadow-sm">
                    <img src="../src/img/2.jpg" class="img-fluid card-img-top">
                    <div class="p-4">
                      <h5><a class="text-dark">Title 02</a></h5>
                      <p class="small text-muted mb-0"> <!--Desc goes here -->
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sagittis consequat ipsum, 
                        non pulvinar nulla sagittis id. 
                      </p>
                      <hr class="separator">
                      <p class="small text-muted mb-0">
                        <i class="fas fa-user-friends"></i> Anthony G, Tyo R , Poppy L
                      </p>
                      <hr class="separator">
                      <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                        <button class="btn btn-primary">Read More</button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 mb-4 anim">
                  <div class="bg-white rounded shadow-sm">
                    <img src="../src/img/3.jpg" class="img-fluid card-img-top">
                    <div class="p-4">
                      <h5><a class="text-dark">Title 03</a></h5>
                      <p class="small text-muted mb-0"> <!--Desc goes here -->
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sagittis consequat ipsum, 
                        non pulvinar nulla sagittis id. 
                      </p>
                      <hr class="separator">
                      <p class="small text-muted mb-0">
                        <i class="fas fa-user-friends"></i> Anthony G, Tyo R , Poppy L
                      </p>
                      <hr class="separator">
                      <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                        <button class="btn btn-primary">Read More</button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 mb-4 anim">
                  <div class="bg-white rounded shadow-sm">
                    <img src="../src/img/1.jpg" class="img-fluid card-img-top">
                    <div class="p-4">
                      <h5><a class="text-dark">Title 01</a></h5>
                      <p class="small text-muted mb-0"> <!--Desc goes here -->
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sagittis consequat ipsum, 
                        non pulvinar nulla sagittis id. 
                      </p>
                      <hr class="separator">
                      <p class="small text-muted mb-0">
                        <i class="fas fa-user-friends"></i> Anthony G, Tyo R , Poppy L
                      </p>
                      <hr class="separator">
                      <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                        <button class="btn btn-primary">Read More</button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 mb-4 anim">
                  <div class="bg-white rounded shadow-sm">
                    <img src="../src/img/2.jpg" class="img-fluid card-img-top">
                    <div class="p-4">
                      <h5><a class="text-dark">Title 02</a></h5>
                      <p class="small text-muted mb-0"> <!--Desc goes here -->
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sagittis consequat ipsum, 
                        non pulvinar nulla sagittis id. 
                      </p>
                      <hr class="separator">
                      <p class="small text-muted mb-0">
                        <i class="fas fa-user-friends"></i> Anthony G, Tyo R , Poppy L
                      </p>
                      <hr class="separator">
                      <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                        <button class="btn btn-primary">Read More</button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 mb-4 anim">
                  <div class="bg-white rounded shadow-sm">
                    <img src="../src/img/3.jpg" class="img-fluid card-img-top">
                    <div class="p-4">
                      <h5><a class="text-dark">Title 03</a></h5>
                      <p class="small text-muted mb-0"> <!--Desc goes here -->
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sagittis consequat ipsum, 
                        non pulvinar nulla sagittis id. 
                      </p>
                      <hr class="separator">
                      <p class="small text-muted mb-0">
                        <i class="fas fa-user-friends"></i> Anthony G, Tyo R , Poppy L
                      </p>
                      <hr class="separator">
                      <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                        <button class="btn btn-primary">Read More</button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 mb-4 anim">
                  <div class="bg-white rounded shadow-sm">
                    <img src="../src/img/1.jpg" class="img-fluid card-img-top">
                    <div class="p-4">
                      <h5><a class="text-dark">Title 01</a></h5>
                      <p class="small text-muted mb-0"> <!--Desc goes here -->
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sagittis consequat ipsum, 
                        non pulvinar nulla sagittis id. 
                      </p>
                      <hr class="separator">
                      <p class="small text-muted mb-0">
                        <i class="fas fa-user-friends"></i> Anthony G, Tyo R , Poppy L
                      </p>
                      <hr class="separator">
                      <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                        <button class="btn btn-primary">Read More</button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 mb-4 anim">
                  <div class="bg-white rounded shadow-sm">
                    <img src="../src/img/2.jpg" class="img-fluid card-img-top">
                    <div class="p-4">
                      <h5><a class="text-dark">Title 02</a></h5>
                      <p class="small text-muted mb-0"> <!--Desc goes here -->
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sagittis consequat ipsum, 
                        non pulvinar nulla sagittis id. 
                      </p>
                      <hr class="separator">
                      <p class="small text-muted mb-0">
                        <i class="fas fa-user-friends"></i> Anthony G, Tyo R , Poppy L
                      </p>
                      <hr class="separator">
                      <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                        <button class="btn btn-primary">Read More</button>
                      </div>
                    </div>
                  </div>
                </div>

              </div> <!--row div-->

            </div> <!--px-lg-5 div-->
          </div> <!--container-fluid-->

        </div> <!--gallery div-->

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
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        });
      </script>
    </body>
</html>