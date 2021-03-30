<?php
    $currentPage = 'uploadGallery_adm';
    include 'header-admin.php';
?>
<section>
<div class="container anim" id="box" style=" margin-top: 50px; color:white; padding-top: 30px; width:fit-content">
            <div class="d-flex justify-content-center">
                <div >
                    <!--Form Box-->
                    <div class="container">
                        <h2 style="margin-bottom: 12px" class="align-items-center">Form Pengunggahan Karya</h2>
                        <p style="font-size: 14px;"></p>
                        <hr style="border-top: 1px solid white; margin-bottom: 30px; margin-top: 36px">
                        <div class="w-100"></div>
                        <form method="POST" action="admin-unggah-proses" enctype="multipart/form-data">
                            <label class="label control-label">Judul Karya</label>
                            <input type="text" class="form-control" name="judul" placeholder="judul karya" maxlength="15">
                            <label class="label control-label">Deskripsi</label>
                            <input class="form-control" name="deskripsi" placeholder="tulis deskripsi karya secara singkat" style="margin-bottom: 10px;" maxlength="30" minlength="10"></input>
                            <label class="label control-label">Anggota</label>
                            <input type="text" class="form-control" name="anggota" placeholder="pisahkan dengan koma jika anggota > 1">
                            <label for="imageUpload">Unggah Foto Karya</label>
                            <input name="foto_karya" type="file"  class="form-control-file" id="exampleFormControlFile1" style="cursor: pointer;">                          
                            <div class="w-100"></div>
                            <button name="submit-btn" type="submit" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" style="margin-top: 10px; width: 30%; border-radius: 5px" >
                                Unggah
                            </button>
                        </form>
                    </div>
                                              
                    </div>
                </div>            
            </div>
        </div>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script>
        $(document).ready(function() {
            Swal.fire(
            'Ketentuan Mengunggah Data',
            '<ul> <li>Judul terdiri dari maksimal 15 karakter </li> <li>Deskripsi terdiri dari 10 hingga 30 karakter </li> <li>Foto yang diunggah memiliki ketentuan dengan ukuran 1920x1080</li></ul>',
            'question'
            )
        });
    </script>

    </body>
</html>
</section>

