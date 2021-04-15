<?php
    $currPage = 'user-rating';
    include 'header-user.php';

    //ignore this page!
?>
<section>

    <div class="container fadeInDown" id="box" style=" margin-top: 50px; color:white; padding-top: 30px; margin-bottom: 40px; height:fit-content">
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <h1 style="text-align: center;" class="fadeInDown">Rate Us! </h1>
                <hr style="border-top: 1px solid white; margin-bottom: 20px; margin-top: 10px"> 
                <i class="fas fa-star fa-2x" data-index="0"></i>
                <i class="fas fa-star fa-2x" data-index="1"></i>
                <i class="fas fa-star fa-2x" data-index="2"></i>
                <i class="fas fa-star fa-2x" data-index="3"></i>
                <i class="fas fa-star fa-2x" data-index="4"></i>
                <hr style="border-top: 1px solid white; margin-bottom: 20px; margin-top: 10px">
                
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>
        var ratedIndex = -1;
    
        $(document).ready(function(){
            resetStarColors();

            if(localStorage.getItem('ratedIndex') != null){
                setStars(parseInt(localStorage.getItem('ratedIndex', ratedIndex)));
            }

            $('.fa-star').on('click', function (){
                ratedIndex = parseInt($(this).data('index'));
                localStorage.setItem('ratedIndex', ratedIndex);
                saveToDB();
            });

            $('.fa-star').mouseover(function(){
                resetStarColors();
                var currentIndex = parseInt($(this).data('index'));
                setStars(currentIndex);
            });

            $('.fa-star').mouseleave(function(){
                resetStarColors();

                if(ratedIndex != -1){
                    setStars(ratedIndex);
                }
            });
        });    
        function saveToDB(){
            $.ajax({
                url:"user-rating.php",
                method:"POST",
                dataType:"json",
                data:{
                    save:l,
                    uid: <?php echo $_SESSION['id']; ?>,
                    rating: ratedIndex
                }, success: function(r){
                    uid = r.uid;
                }
            });
        }

        function setStars(max){
            for(var i=0; i<=max; i++){
                $('.fa-star:eq('+i+')').css('color','green');
            }
        }

        function resetStarColors(){
            $('.fa-star').css('color','white');
        }
    </script>
</section>
</body>
</html>
