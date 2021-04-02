<?php
    $currentPage = 'profile';
    include 'header-admin.php';
    $email = $_SESSION['email'];
    if (isset($_POST['forgot-pass'])) {
    $mail = $_POST['mail'];

    if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $errors['mail'] = "<font color='red'; > Email Address Is Invalid </font>";
    }
    if (empty($email)) {
        $errors['mail'] = "<font color='red'; > Email Required </font>";
    }
    if (count($errors) === 0) {
        $sql = "SELECT * FROM users WHERE email='$email' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_assoc($result);
        $token = $user['token'];
        SendPasswordResetLink($email, $token);
    }

}
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

                    <!--Form Box II-->
                    <div class="col-md-6">
                        <div class="container" id="pictBox">
                            <h3 style="margin-bottom: 12px; text-align: center;" class="fadeInLeft">Ubah Password</h2>
                            <hr style="border-top: 1px solid white; margin-bottom: 30px; margin-top: 10px">
                            <div class="w-100"></div>
                            <p>Untuk memberbarui password anda dan memastikan bahwa itu anda, silahkan klik tombol dan menuju ke halaman penggantian password</p>
                            <div class="w-100"></div>
                            <form action="" method="POST">
                            <button name="forgot-pass" onclick="runAlert()" class="btn btn-success" style="margin-top: 10px; width: 30%; border-radius: 5px" ><input type="text" class="form-control" name="mail"  value="<?php echo $_SESSION['email']; ?> " hidden>
                                Kirim
                            </button>
                            </form>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    <!--import sweet alert-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script>
        function runAlert(){
        Swal.fire(
        'Silahkan cek email anda!',
        'Kami telah mengirim link untuk mereset password anda.',
        'success'
        ).then(function(){
            window.location.replace("admin-profile");
        })
        };
    </script>
    </body>
</html>

</section>