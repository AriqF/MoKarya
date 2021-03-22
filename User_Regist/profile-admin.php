<!DOCTYPE html>
<html>
    <head>
        <title>MoKarya | Admin Profile</title>
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
        <link href="../src/css/dashboard_admin.css" type="text/css" rel="stylesheet"> 

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
            <a class="navbar-brand" href="#">Welcome, ?> </a> <!--add user session name- -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="User_Regist/dashboard_admin"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-images"></i>  Gallery
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #4527a4;">
                        <a class="dropdown-item" href="gallery-data.php">Gallery Data</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Preview Gallery</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="members-admin"><i class="fas fa-users"></i> Members</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="profile-admin"><i class="fas fa-id-card"></i> Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container op" id="box" style=" margin-top: 50px; color:white; padding-top: 30px;">
            <div class="row justify-content-md-center">
                <div class="col-md-auto">
                    <h1 style="text-align: center;" class="fadeInUp">Admin Profile Settings</h1>
                    <hr style="border-top: 1px solid white; margin-bottom: 30px; margin-top: 10px">
                </div>
            </div>
            <div class="row">  
                <div class="col-md-6">
                    <!--Form Box-->
                    <div class="container" id="formBox">
                        
                        <h3 style="margin-bottom: 12px; text-align: center;" class="fadeInRight">Admin Profile</h2>
                        <hr style="border-top: 1px solid white; margin-bottom: 30px; margin-top: 10px">
                        <div class="w-100"></div>
                        <form>
                            <label class="label control-label">Nama</label>
                            <input type="text" class="form-control" name="namalengkap" readonly>
                            <label class="label control-label">email</label>
                            <input type="text" class="form-control" name="email"  readonly>                                                      
                            <div class="w-100"></div>
                        </form>
                    </div>
                       
                        
                    </div>

                    <!--Image Box-->
                    <div class="col-md-6">
                        <div class="container" id="pictBox">
                            <h3 style="margin-bottom: 12px; text-align: center;" class="fadeInLeft">Ubah Password</h2>
                            <hr style="border-top: 1px solid white; margin-bottom: 30px; margin-top: 10px">
                            <div class="w-100"></div>
                            <label class="label control-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="password">
                            <label class="label control-label">Confirm Password</label>
                            <input type="password" class="form-control" name="passwordConf" placeholder="confirm password">
                            <div class="w-100"></div>
                            <button name="update-pass-btn" type="submit" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" style="margin-top: 10px; width: 30%; border-radius: 5px" >
                                Perbarui
                            </button>
                        </div>
                    </div>
                </div>            
            </div>
        </div>

    </body>
</html>