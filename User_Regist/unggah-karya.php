<?php
    $currPage = 'unggah';
    include 'header-user.php';

    // $id_users = $_SESSION['id'];
    // $query = mysqli_query($conn, "SELECT * FROM data_karya WHERE id_pengunggah = '$id_users'")

    $uid = $_SESSION['id'];

?>
        <div class="container op" id="box" style=" margin-top: 50px; color:white; padding-top: 30px;">
            <div class="row">
                <div class="col-md-6">
                    <!--Form Box-->
                    <div class="container" id="formBox">
                        <h2 style="margin-bottom: 12px">Form Pengunggahan Karya</h2>
                        <p style="font-size: 14px;">Isi form berikut dengan singkat dan jelas</p>
                        <hr style="border-top: 1px solid white; margin-bottom: 30px; margin-top: 36px">
                        <div class="w-100"></div>
                         <form method="POST" action="unggah-karya-proses" enctype="multipart/form-data">
                            <label class="label control-label">Judul Karya</label>
                            <input type="text" class="form-control" name="judul" placeholder="judul karya" maxlength="19">
                            <label class="label control-label">Deskripsi</label>
                            <input class="form-control" name="deskripsi" placeholder="tulis deskripsi karya secara singkat" style="margin-bottom: 10px;"></input>
                            <label class="label control-label">Anggota</label>
                            <input type="text" class="form-control" name="anggota" placeholder="pisahkan dengan koma jika anggota > 1" minlength="10" maxlength="28">
                            <label for="imageUpload">Unggah Foto Karya</label>
                            <input name="foto_karya" type="file"  class="form-control-file" id="exampleFormControlFile1" style="cursor: pointer;">   
                             <input name="id_pengunggah" type="text" class="form-control" value="<?php echo $_SESSION['id']; ?>" hidden>
                            <div class="w-100"></div>
                            <button name="submit-btn" type="submit" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" style="margin-top: 10px; width: 30%; border-radius: 5px" >
                                Unggah
                            </button>
                        </form>
                    </div>
                       
                        
                    </div>

                    <!--Image Box-->
                    <div class="col-md-6">
                        <div class="container" id="pictBox">
                            <h2 style="margin-bottom: 12px">Form Penghapusan Karya</h2>
                            <p style="font-size: 14px;">Jika anda menginginkan untuk mengahapus karya, silahkan pilih karya yang ingin anda hapus</p>
                            <hr style="border-top: 1px solid white; margin-bottom: 30px;">
                            <div class="w-100"></div>
                            <div class="input-group mb-3">
                                <label for="imageUpload">Pilih karya yang ingin anda hapus</label>
                                <div class="w-100"></div>
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01" style="cursor: pointer;">
                                    <option selected>Pilih Berdasarkan Judul</option>
                                    <!-- <option><?php echo $_SESSION['id']; ?></option> -->
                                    <option>
                                    <?php

                                        $query = "SELECT d.id, d.id_pengunggah, d.judul FROM data_karya AS d JOIN users AS u ON d.id_pengunggah = $uid GROUP BY d.judul;";
                                        $result = mysqli_query($conn, $query);
                                        if(!$result){
                                        die ("Query Error: ".mysqli_errno($conn).
                                                    " - ".mysqli_error($conn));
                                        }
                                                   
                                        while($row = mysqli_fetch_assoc($result))
                                        {
                                            echo $row['judul'];
                                        } 
                                    ?>
                                    </option>

                                </select>
                                <div class="w-100"></div>
                                <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" style="margin-top: 10px; width: 30%; border-radius: 5px" >
                                    Hapus
                                </button>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <<script>
        $(document).ready(function() {
            Swal.fire(
            'Ketentuan Mengupload Karya',
            '<ul> <li>Judul terdiri dari maksimal 19 karakter </li> <li>Anggota terdiri dari 10 hingga 28 karakter </li> <li>Foto yang diunggah memiliki ketentuan dengan ukuran 1920x1080 px</li></ul>',
            'question'
            )
        });
    </script>
    </body>
</html>