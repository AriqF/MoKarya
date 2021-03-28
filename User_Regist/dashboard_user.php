<?php
  $currPage = 'dashboard';
  include 'header-user.php';

  //MEMBUAT PAGINASI

  $per_laman = 12; // batas posting hanya sampai 12 karya 
  $laman_sekarang = 1; // deklarasi laman sekarang = 1
  if(isset($_GET['laman']))
  {
    $laman_sekarang = $_GET['laman'];
    $laman_sekarang = ($laman_sekarang > 1) ? $laman_sekarang : 1;
  }
  $total_data = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM data_karya ORDER BY id DESC"));
  $total_laman = ceil($total_data/$per_laman); // pembulatan angka laman 
  $awal = ($laman_sekarang - 1) * $per_laman; // laman sekarang


?>
<section>
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








              <!-- TAMPIL DATA KARYA -->

              <div class="row">

                <?php
                $query = "SELECT * FROM data_karya LIMIT $per_laman OFFSET $awal";
                $query_run = mysqli_query($conn, $query);

                $check_data_karya = mysqli_num_rows($query_run) > 0;

                if($check_data_karya)
                {
                  while ($row_karya = mysqli_fetch_array($query_run)) {
                    ?>

                <div class="col-xl-3 col-lg-4 col-md-6 mb-4 anim">
                  <div class="bg-white rounded shadow-sm">
                    <img src="gambar/<?php echo $row_karya['foto_karya']; ?>" class="img-fluid card-img-top" alt="Image Karya">
                    <div class="p-4">
                      <h5><a class="text-dark"><?php echo $row_karya['judul']; ?></a></h5>
                      <p class="small text-muted mb-0"> <!--Desc goes here -->
                        <?php echo $row_karya['deskripsi'] ?>
                      </p>
                      <hr class="separator">
                      <p class="small text-muted mb-0">
                        <i class="fas fa-user-friends"></i> <?php echo $row_karya['anggota'] ?>
                      </p>
                      <hr class="separator">
                      <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                        <button class="btn btn-primary">Read More</button>
                      </div>
                    </div>
                  </div>
                </div>

                    <?php
                    //echo $row_karya['judul'];
                  }
                }
                else
                {
                  echo "No Record Found";
                }


                ?>

                <!-- TAMPIL DATA KARYA -->













                  <!-- BAGIAN INI SEBENARNYA BISA DIHAPUS -->


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

            <!-- BAGIAN INI SEBENARNYA BISA DIHAPUS -->










        <!-- LAMAN PAGINASI -->

        <?php if(isset($total_laman)) {?>
        <?php if($total_laman > 1) {?>


        <nav class="nav justify-content-center">
          <ul class="pagination">
            <?php if($laman_sekarang > 1) {?>
            <li>  
              <a href="dashboard_user?laman=<?php echo $laman_sekarang - 1 ?>">
                <button class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" style="margin-top: 10px; border-radius: 5px; width:fit-content; color: white;margin-top:18px;">Previous Page</button> &nbsp;&nbsp;
              </a>  
            </li> 
          <?php } else {?>
            <li class="nav-link disabled" aria-disabled="true" tabindex="-1">
                <button class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" style="margin-top: 10px; border-radius: 5px; width:fit-content; color: white;">Previous Page</button> 
            </li> 
          <?php } ?>
          <?php if($laman_sekarang < $total_laman) {?>
            <li>
              <a href="dashboard_user?laman=<?php echo $laman_sekarang + 1 ?>">
                <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal" style="margin-top: 10px; border-radius: 5px; width:fit-content; margin-top:18px;" >Next Page</button>
              </a>  
            </li> 
            <?php } else {?>
            <li class="nav-link disabled" aria-disabled="true" tabindex="-1">
                <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal" style="margin-top: 10px; border-radius: 5px; width:fit-content" >Next Page</button>  
            </li>
          <?php } ?>
          </ul> 
        </nav>
        <?php } ?>
        <?php } ?>

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

</section>
