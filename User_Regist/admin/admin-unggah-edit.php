<?php
    $currentPage = 'uploadGallery_adm';
    include 'header-admin.php';    

     // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET['id']);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM data_karya WHERE id='$id'";
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
          echo "<script>alert('Data tidak ditemukan pada database');window.location='admin-gallery-data';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke admin-unggah
    echo "<script>alert('Masukkan data id.');window.location='admin-gallery-data';</script>";
  }         
  ?>
<section>
<div class="container anim" id="box" style=" margin-top: 50px; color:white; padding-top: 30px; width:fit-content">
            <div class="d-flex justify-content-center">
                <div >
                    <!--Form Box-->
                    <div class="container">
                        <h2 style="margin-bottom: 12px" class="align-items-center">Form Edit Karya <?php echo $data['judul']; ?></h2>
                        <p style="font-size: 14px;"></p>
                        <hr style="border-top: 1px solid white; margin-bottom: 30px; margin-top: 36px">
                        <div class="w-100"></div>
                        <form method="POST" action="admin-unggah-edit-proses" enctype="multipart/form-data">
                            <input name="id" value="<?php echo $data['id']; ?>"  hidden />
                            <label class="label control-label">Judul Karya</label>
                            <input type="text" class="form-control" name="judul" placeholder="judul karya" value="<?php echo $data['judul']; ?>">
                            

                            <label class="label control-label">Deskripsi</label>
                            <input type="text"  class="form-control" placeholder="tulis deskripsi karya secara singkat" value="<?php echo $data['deskripsi']; ?>"></input>

                            <label class="label control-label">Anggota</label>
                            <input type="text" class="form-control" name="anggota" placeholder="pisahkan dengan koma jika anggota > 1" value="<?php echo $data['anggota']; ?>" >

                            <label for="imageUpload">Unggah Foto Karya</label>
                            <br>
                            <img src="gambar/<?php echo $data['foto_karya']; ?>" style="width: 120px; float: left;margin-bottom: 5px;">
                            <input name="foto_karya" type="file" class="form-control-file" id="exampleFormControlFile1" style="cursor: pointer;">  
                            <i style="float: left;font-size:16px;color: red;">Abaikan jika tidak merubah gambar karya.</i>                        
                            <div class="w-100"></div>
                            <button name="submit-btn" type="submit" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" style="margin-top: 10px; width: 30%; border-radius: 5px" >
                                Simpan
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

