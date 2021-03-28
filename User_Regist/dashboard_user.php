<?php
  $currPage = 'dashboard';
  include 'header-user.php';
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
                $query = "SELECT * FROM data_karya";
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
                        <button class="btn btn-primary" data-toggle="modal" data-target="#img<?php echo $row_karya['id']; ?>">Read More</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="img<?php echo $row_karya['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <img src="gambar/<?php echo $row_karya['foto_karya']; ?>" class="img-fluid card-img-top" alt="Image Karya" style="height: fit-content; width:fit-content">
                        <hr>
                      </div>
                      <div class="modal-body">
                      <h5 class="modal-title" id="exampleModalLabel">Judul: <a class="text-dark"><?php echo $row_karya['judul']; ?></a></h5>
                      <hr>
                      <p class="small text-muted mb-0"> <!--Desc goes here -->
                        <?php echo $row_karya['deskripsi'] ?>
                        </p>
                        <hr>
                        <p class="small text-muted mb-0">
                        <i class="fas fa-user-friends"></i> <?php echo $row_karya['anggota'] ?>
                        </p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="margin-right: 20px;">Close</button>
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
<!--import sweet alert-->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script>
      function runAlert(){
        Swal.fire(
          'The Internet?',
          'That thing is still around?',
          'question'
        )
      }
    </script>         
    </body>
</html>

</section>
