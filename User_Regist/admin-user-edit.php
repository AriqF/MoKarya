<?php
    $currentPage = 'uploadGallery_adm';
    include 'header-admin.php';    

     // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET['id']);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM users WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($conn).
         " - ".mysqli_error($conn));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='admin-usersConfig';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke admin-unggah
    echo "<script>alert('Masukkan data id.');window.location='admin-usersConfig';</script>";
  }         
  ?>
<section>
<div class="container anim" id="box" style=" margin-top: 50px; color:white; padding-top: 30px; width:fit-content">
            <div class="d-flex justify-content-center">
                <div >
                    <!--Form Box-->
                    <div class="container">
                        <h2 style="margin-bottom: 12px" class="align-items-center">Form Edit User <?php echo $data['namalengkap']; ?></h2>
                        <p style="font-size: 14px;"></p>
                        <hr style="border-top: 1px solid white; margin-bottom: 30px; margin-top: 36px">
                        <div class="w-100"></div>
                        <form method="POST" action="admin-user-edit-proses" enctype="multipart/form-data">
                            <input name="id" value="<?php echo $data['id']; ?>"  hidden />
                            <label class="label control-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="namalengkap" placeholder="namalengkap" value="<?php echo $data['namalengkap']; ?>">

                            <label class="label control-label">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="email" value="<?php echo $data['email']; ?>">

                            <label class="label control-label">NIM</label>
                            <input type="text" class="form-control" name="nim" placeholder="nim" value="<?php echo $data['nim']; ?>">

                            <label class="label control-label">Angkatan</label>
                            <input type="text" class="form-control" name="angkatan" placeholder="angkatan" value="<?php echo $data['angkatan']; ?>">

                            <label class="label control-label">Kelas</label>
                            <input type="text" class="form-control" name="kelas" placeholder="kelas" value="<?php echo $data['kelas']; ?>">
                            

                                                   
                            <div class="w-100"></div>
                            <button name="submit-btn" type="submit" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" style="margin-top: 10px; width: 30%; border-radius: 5px" >
                                Simpan Perubahan
                            </button>
                        </form>
                    </div>
                                              
                    </div>
                </div>            
            </div>
        </div>




    </body>
    <br>
    <br>
</html>
</section>

