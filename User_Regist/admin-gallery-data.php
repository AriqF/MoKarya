<?php
    $currentPage = 'galleryData';
    include 'header-admin.php';
?>
<section>
    <div class="container op " id="box" style=" color:white; padding-top: 30px; margin-top: 40px;">
                <div class="row justify-content-md-center">
                    <div class="col-md-auto">
                        <h1 style="text-align: center;" class="fadeInUp">Gallery Data Settings</h1>
                        <hr style="border-top: 1px solid white; margin-bottom: 30px; margin-top: 10px">

                         <center>
                            <a href="admin-unggah">
                            <button name="edit-pass-btn" type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-top: 10px; border-radius: 5px" >+ &nbsp; Tambah Karya</button></a></center>
                    <br>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-image">
                            <thead >
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Anggota</th>
                                    <th scope="col">Foto Karya</th>                                
                                    <th scope="col">Aksi</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM data_karya ORDER BY id ASC";
      $result = mysqli_query($conn, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($conn).
           " - ".mysqli_error($conn));
      }
      //perulangan untuk element tabel dari data mahasiswa
      $ID = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $ID; ?></td>
          <td><?php echo $row['judul']; ?></td>
          <td><?php echo $row['deskripsi']; ?></td> <!--<td><.? php echo substr($row['deskripsi'], 0, 20); ?.>...</td> -->
          <td><?php echo $row['anggota']; ?></td>
          <td style="text-align: center;"><img src="gambar/<?php echo $row['foto_karya']; ?>" class="img-fluid img-thumbnail"></td>
          <td>
            <a href="admin-unggah-edit?id=<?php echo $row['id']; ?>" style="text-decoration:none"> <button name="edit-pass-btn" type="submit" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" style="margin-top: 10px; border-radius: 5px" >Edit</button></a>
            <a href="admin-unggah-hapus-proses?id=<?php echo $row['id']; ?>" style="text-decoration:none" onclick="return confirm('Anda yakin akan menghapus data ini?')"><button nname="edit-pass-btn" type="submit" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" style="margin-top: 10px; border-radius: 5px">Hapus</button></a>
          </td>
      </tr>
         
      <?php
        $ID++; //untuk nomor urut terus bertambah 1
      }

      ?>
                                <tr>
                                    <th scope="row">1</th> <!--id-->
                                    <td>Lorem</td> <!--judul-->
                                    <td> <!--desc-->
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                        Nullam sagittis consequat ipsum, 
                                        non pulvinar nulla sagittis id. 
                                    </td>
                                    <td> <!--anggota-->
                                        <p>Tyo, Bram, Sou</p>
                                    </td>
                                    <td> <!--foto-->
                                        <img src="../src/img/1.jpg" class="img-fluid img-thumbnail">
                                    </td>                          
                                    <td> <!--aksi-->                                  
                                        <button name="edit-pass-btn" type="submit" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" style="margin-top: 10px; border-radius: 5px" >
                                            Edit
                                        </button>
                                        <div class="w-100"></div>
                                        <button name="edit-pass-btn" type="submit" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" style="margin-top: 10px; border-radius: 5px" >
                                            Hapus
                                        </button>                                                             
                                    </td>                               
                                </tr>
                                <tr>
                                    <th scope="row">2</th> <!--id-->
                                    <td>Lorem</td> <!--judul-->
                                    <td> <!--desc-->
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                        Nullam sagittis consequat ipsum, 
                                        non pulvinar nulla sagittis id. 
                                    </td>
                                    <td> <!--anggota-->
                                        <p>Tyo, Bram, Sou</p>
                                    </td>
                                    <td> <!--foto-->
                                        <img src="../src/img/2.jpg" class="img-fluid img-thumbnail">
                                    </td>                          
                                    <td> <!--aksi-->
                                        <button name="edit-pass-btn" type="submit" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" style="margin-top: 10px; border-radius: 5px" >
                                            Edit
                                        </button>
                                        <div class="w-100"></div>
                                        <button name="edit-pass-btn" type="submit" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" style="margin-top: 10px; border-radius: 5px" >
                                            Hapus
                                        </button>                             
                                    </td>  
                                </tr>
                                <tr>
                                    <th scope="row">3</th> <!--id-->
                                    <td>Lorem</td> <!--judul-->
                                    <td> <!--desc-->
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                        Nullam sagittis consequat ipsum, 
                                        non pulvinar nulla sagittis id. 
                                    </td>
                                    <td> <!--anggota-->
                                        <p>Tyo, Bram, Sou</p>
                                    </td>
                                    <td> <!--foto-->
                                        <img src="../src/img/3.jpg" class="img-fluid img-thumbnail">
                                    </td>                          
                                    <td> <!--aksi-->
                                        <button name="edit-pass-btn" type="submit" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" style="margin-top: 10px;  border-radius: 5px" >
                                            Edit
                                        </button>
                                        <div class="w-100"></div>
                                        <button name="edit-pass-btn" type="submit" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" style="margin-top: 10px; border-radius: 5px" >
                                            Hapus
                                        </button>                                      
                                    </td>  
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>

        </body>
    </html>

</section>        
