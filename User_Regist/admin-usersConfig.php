<?php
    $currentPage = 'usersConfig';   
    include 'header-admin.php';
?>
<section>
<div class="container mw-100 animwo" id="box" style=" color:white; padding-top: 30px; margin-top: 60px; width:90%;">
                <div class="row justify-content-md-center">
                    <div class="col-md-auto">
                        <h1 style="text-align: center;" class="fadeInUp">User Data Settings</h1>
                        <hr style="border-top: 1px solid white; margin-bottom: 30px; margin-top: 10px">

                    <br>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-image">
                            <thead >
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">namalengkap</th>
                                    <th scope="col">email</th>
                                    <th scope="col">NIM</th>
                                    <th scope="col">angkatan</th>                                
                                    <th scope="col">kelas</th>
                                    <th scope="col">verified</th>
                                    <th scope="col">aksi</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM users WHERE usertype = 'user'  ORDER BY id ASC";
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
          <td class="td-sm sm-font"><?php echo $ID; ?></td>
          <td class="td-sm sm-font"><?php echo $row['namalengkap']; ?></td>
          <td style="width:fit-content" class="sm-font"><abbr title="<?php echo $row['email']; ?>" style="border: none; text-decoration: none;"><?php echo substr($row['email'], 0 ,31); ?></abbr></td> <!--<td><.? php echo substr($row['deskripsi'], 0, 20); ?.>...</td> -->
          <td class="td-sm sm-font"><?php echo $row['nim']; ?></td>
          <td class="td-sm sm-font"><?php echo $row['angkatan']; ?></td>
          <td class="td-sm sm-font"><?php echo $row['kelas']; ?></td>
          <td class="td-sm sm-font"><?php echo $row['verified']; ?></td>
          <td class="td-sm sm-font">
            <a href="admin-user-edit?id=<?php echo $row['id']; ?>" style="text-decoration:none"> <button name="edit-pass-btn" type="submit" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" style="margin-top: 10px; border-radius: 5px; width:fit-content" >Edit</button></a>
            <a href="admin-user-hapus-proses?id=<?php echo $row['id']; ?>" style="text-decoration:none" onclick="return confirm('Anda yakin akan menghapus data ini?')"><button name="edit-pass-btn" type="submit" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" style="margin-top: 10px; border-radius: 5px; width:fit-content">Hapus</button></a>
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
                
            </div>

</html>
</section>