<?php
    $currPage = 'user-rating';
    include 'header-user.php';

    $uid = $_SESSION['id'];
?>
<section>

    <div class="container fadeInDown" id="box" style=" margin-top: 50px; color:white; padding-top: 30px; margin-bottom: 40px; height:fit-content; width:50%">
        <div class="row justify-content-md-center">
            <div class="col-md-12">
                <h1 style="text-align: center;" class="fadeInDown">Rate Us! </h1>
                <hr style="border-top: 1px solid white; margin-bottom: 20px; margin-top: 10px"> 
                <h5 style="margin-bottom: 0px;">Bagaimana dengan pengalaman anda dalam menggunakan sistem informasi ini? </h5>
                <p>Hai, <?php echo $uid; ?></p>
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
                    echo $row['id'];
                } 

                ?>
                <hr>
                <form class="rating" method="POST" action="user-rating-proses" id="rateForm" enctype="multipart/form-data">
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
                <input type="text" class="form-control" name="namalengkap" value="<?php echo $_SESSION['namalengkap']; ?> " hidden>
                <label class="label control-label"><h5>Komentar</h5></label>
                <textarea type="text" class="form-control" id="exampleFormControlTextarea1" rows="4" name="komentar" placeholder="berikan komentar anda" style="width:80%"> </textarea>
                <div class="custom-control custom-checkbox" style="margin-top: 12px;">
                    <input type="checkbox" class="custom-control-input" id="defaultChecked2" name="anonymSend" value="true">
                    <label class="custom-control-label" for="defaultChecked2" id="keeptxt">Kirim sebagai anonim</label>
                </div>
                <div class="w-100"></div>
                <button name="submit-btn" type="submit" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" style="margin-top: 10px; width: 30%; border-radius: 5px" >
                    Submit
                </button>
                </form>
            </div>
        </div>
    </div>
    

<script>
    $(':radio').change(function() {
        console.log('New star rating: ' + this.value);
    });
</script>

</section>
</body>
</html>
