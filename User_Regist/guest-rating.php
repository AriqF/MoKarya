<?php
    $currPage = 'guest-rating';
    include 'header-guest.php';
?>
<section>

    <div class="container fadeInDown" id="box" style=" margin-top: 50px; color:white; padding-top: 30px; margin-bottom: 40px; height:fit-content; width:50%">
        <div class="row justify-content-md-center">
            <div class="col-md-12">
                <h1 style="text-align: center;" class="fadeInDown">Rate Us! </h1>
                <hr style="border-top: 1px solid white; margin-bottom: 20px; margin-top: 10px"> 
                <h5 style="margin-bottom: 0px;">Bagaimana dengan pengalaman anda dalam menggunakan sistem informasi ini?</h5>
                <form class="rating" method="POST" action="guest-rating-proses" id="rateForm" enctype="multipart/form-data">
                    <label>
                        <input type="radio" name="rating" value="1" />
                        <span class="icon">★</span>
                    </label>
                    <label>
                        <input type="radio" name="rating" value="2" />
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                    </label>
                    <label>
                        <input type="radio" name="rating" value="3" />
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                        <span class="icon">★</span>   
                    </label>
                    <label>
                        <input type="radio" name="rating" value="4" />
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                    </label>
                    <label>
                        <input type="radio" name="rating" value="5" />
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                    </label>            
        </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-12">
                <label class="label control-label"><h5>Username</h5></label>
                <input type="text" class="form-control" name="namalengkap" placeholder="" style="width: 50%">
                <label class="label control-label"><h5>Komentar</h5></label>
                <textarea type="text" class="form-control" id="exampleFormControlTextarea1" rows="4" name="komentar" placeholder="berikan komentar anda" style="width:80%"> </textarea>
                <div class="w-100"></div>
                <button name="submit-btn" type="submit" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" style="margin-top: 10px; width: 30%; border-radius: 5px" >
                    Submit
                </button>
                </form>
            </div>
        </div>
    </div>
    
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script>
    $(':radio').change(function() {
        console.log('New star rating: ' + this.value);
    });
    $(document).ready(function() {   
        Swal.fire(
            'Rate Us!',
            'Berikan kami penilaian agar kami dapat meningkatkan kualitas sistem kami <br> <hr> <small>Kosongkan kolom username untuk mengirim secara anonim</small> <hr>',
            'info')     
    });
</script>

</section>
</body>
</html>
