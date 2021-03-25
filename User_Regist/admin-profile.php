<?php
    $currentPage = 'profile';
    include 'header-admin.php';
?>
<section>
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
                            <input type="text" class="form-control" name="namalengkap" value="<?php echo $_SESSION['namalengkap']; ?> " readonly>
                            <label class="label control-label">email</label>
                            <input type="text" class="form-control" name="email"  value="<?php echo $_SESSION['email']; ?> " readonly>                                                      
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

</section>