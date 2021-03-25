<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>MoKarya || Register Page</title>
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
        <link href="../src/css/registerStyle.css" type="text/css" rel="stylesheet"> 

        <!--Swiper.js-->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
         
        <!--Google Fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Epilogue&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    </head>
    <body>
        <form form class="form" action="register" method="post">
        <div class="content">
            <div class="container" id="box" style="padding: 0; margin-top: 20px;">
                <div class="row">
                    <div class="col-md-6">
                        <!--Form Box-->
                        <div class="container" id="formBox">
                            <h2>Sign Up Forms</h2>
                                   <?php if (count($errors) > 0): ?>
                                             <div class="alert alert-danger">
                                                <?php foreach($errors as $error): ?>
                                                <li><?php echo $error; ?></li>
                                                <?php endforeach; ?>
                                             </div>
                                    <?php endif; ?>
                            <p style="font-size: 14px;">Sign up lalu login agar dapat memulai mengunggah karya-mu!</p>
                            <hr style="border-top: 1px solid white; margin-bottom: 15px;">
                            <form>
                                
                                <label class="label control-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="namalengkap" placeholder="nama lengkap" value="<?php echo $namalengkap; ?>">
                                <div class="row">
                                    <div class="col-12 col-md-8">
                                        <label class="label control-label">Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="email universitas" value="<?php echo $email; ?>">
                                    </div>
                                    <div class="col-6 col-md-4">
                                        <label class="label control-label">NIM</label>
                                        <input type="number" class="form-control" name="nim" placeholder="nim">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 ">
                                        <label class="label control-label">Angkatan</label>
                                        <input type="number" class="form-control" name="angkatan" placeholder="ex: 2019, 2020">
                                    </div>
                                    <div class="col-6 ">
                                        <label class="label control-label">Kelas</label>
                                        <input type="text" class="form-control" name="kelas" placeholder="ex: A, B" style="text-transform: uppercase;" maxlength="1">
                                    </div>
                                </div>
                                <label class="label control-label">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="password">
                                <label class="label control-label">Confirm Password</label>
                                <input type="password" class="form-control" name="passwordConf" placeholder="confirm password">

                                <input type="hidden" class="form-control" name="usertype" value="user">

                                <div class="col text-center" style="margin-top: 15px;">
                                    <a href="login">saya sudah memiliki akun &#10003;</a>
                                    <div class="w-100"></div>
                                    <button name="signup-btn" type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id="startbtn" style="margin-top: 10px;">
                                        Sign Up
                                    </button>
                                </div>
                            </form>
                                               
                        </div>
                    </div>
                    <!--Image Box-->
                    <div class="col-md-6">
                        <div class="container" id="pictBox">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </body>
</html>