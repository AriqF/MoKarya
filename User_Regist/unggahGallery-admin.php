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
                        <p style="font-size: 14px;">-</p>
                        <hr style="border-top: 1px solid white; margin-bottom: 30px; margin-top: 36px">
                        <div class="w-100"></div>
                        <form>
                            <label class="label control-label">Judul Karya</label>
                            <input type="text" class="form-control" name="title" placeholder="judul karya">
                            <label class="label control-label">Anggota</label>
                            <input type="text" class="form-control" name="anggota" placeholder="pisahkan dengan koma jika anggota > 1">
                            <label class="label control-label">Deskripsi</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="desc" rows="3" placeholder="tulis deskripsi karya secara singkat" style="margin-bottom: 10px;"></textarea>
                            <label for="imageUpload">Unggah Foto Karya</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" style="cursor: pointer;">                          
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




    </body>
</html>
</section>

