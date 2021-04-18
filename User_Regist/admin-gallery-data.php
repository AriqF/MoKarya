<?php
    $currentPage = 'galleryData';
    include 'header-admin.php';
?>
<section>
    <div class="container animwo mw-100" id="box" style=" color:white; padding-top: 30px; margin-top: 40px;">
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <h1 style="text-align: center;" class="fadeInUp">Gallery Data Settings</h1>
                <hr style="border-top: 1px solid white; margin-bottom: 10px; margin-top: 10px">
            <br>
            </div>
            <div class="w-100"></div>
            <form action="" method="POST">
                <div class="d-flex bd-highlight mb-3">
                    <div class="mr-auto p-2 bd-highlight">
                        <a href="admin-unggah">
                            <button name="edit-pass-btn" type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style=" border-radius: 5px; width:fit-content" >
                            <i class="fas fa-plus"></i> Tambah Karya
                            </button>
                        </a>
                    </div>
                    <div class="p-2 bd-highlight">            
                        <input name="cari" autofocus autocomplete="off" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> 
                    </div>
                    <div class="p-2 bd-highlight">
                        <button name="btn-cari"class="btn btn-outline-info my-2 my-sm-0" type="submit" style="width: fit-content;"><i class="fas fa-search"></i></button>    
                    </div>
                </div>
            </form>
            <div class="table-responsive">
                <table class="table table-striped table-image">
                    <thead >
                        <tr>
                            <th scope="col">Nomor</th>
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
                            if (isset($_POST['cari'])) {
                                $result = mysqli_query($conn,"SELECT * FROM data_karya WHERE judul LIKE '%".$_POST['cari']."%' OR anggota LIKE '%".$_POST['cari']."%'" );
                            }
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
                                    <a href="admin-unggah-edit?id=<?php echo $row['id']; ?>" style="text-decoration:none"> <button name="edit-pass-btn" type="submit" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" style="margin-top: 10px; border-radius: 5px; width:fit-content" >Edit</button></a>
                                    <a href="admin-unggah-hapus-proses?id=<?php echo $row['id']; ?>" style="text-decoration:none" onclick="return confirm('Anda yakin akan menghapus data ini?')"><button name="edit-pass-btn" type="submit" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" style="margin-top: 10px; border-radius: 5px; width:fit-content">Hapus</button></a>
                                </td>
                            </tr>
                                
                            <?php
                                $ID++; //untuk nomor urut terus bertambah 1
                            }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
                
        </body>
    </html>

</section>        
