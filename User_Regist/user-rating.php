<?php
    $currPage = 'user-rating';
    include 'header-user.php';

?>
<section>

    <div class="container fadeInDown" id="box" style=" margin-top: 50px; color:white; padding-top: 30px; margin-bottom: 40px; height:fit-content; width:50%">
        <div class="row justify-content-md-center">
            <div class="col-md-12">
                <h1 style="text-align: center;" class="fadeInDown">Rate Us! </h1>
                <hr style="border-top: 1px solid white; margin-bottom: 20px; margin-top: 10px"> 
                <h5 style="margin-bottom: 0px;">Bagaimana dengan pengalaman anda di sistem informasi ini?</h5>
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
                <label class="label control-label"><h5>Komentar</h5></label>
                <textarea type="text" class="form-control" id="exampleFormControlTextarea1" rows="3" name="komentar" placeholder="berikan komentar anda" style="width:80%"> </textarea>
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
