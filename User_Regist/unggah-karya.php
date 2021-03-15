<!DOCTYPE html>
<html>
    <head>
        <title>MoKarya | Gallery</title>
         <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      
        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        
        <!--Swiper JS-->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

        <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <!--My css-->
        <link href="../src/css/dashboard_user.css" type="text/css" rel="stylesheet"> 

        <script src="../src/js/galleryScript.js"></script>

        <!--Swiper.js-->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
         
        <!--Google Fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Epilogue&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

        <!--font awesome-->
        <script src="https://kit.fontawesome.com/babb4f3fd7.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #4527a4;">
            <a class="navbar-brand" href="#">Welcome, </a> <!--add user session name- -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="User_Regist/gallery_user.php"><i class="fas fa-images"></i> Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><i class="fas fa-upload"></i> Unggah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="User_Regist/profile_user.php"><i class="fas fa-id-card"></i> Profile</a>
                    </li>               
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container" id="box" style=" margin-top: 50px; color:white">
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