<?php
    $currPage = 'unggah';
    include 'header-user.php';
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
                                    <option selected>Pilih...</option>
                                    <option value="1">Title 01</option>
                                    <option value="2">Title 02</option>
                                    <option value="3">Title 03</option>
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

    </body>
</html>