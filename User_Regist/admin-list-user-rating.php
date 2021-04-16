<?php
    $currentPage = 'admin-list-user-rating';
    include 'header-admin.php';
    $queryTotalReviews = mysqli_query($conn, "SELECT rating FROM user_rating");
    $numTotalRev = mysqli_num_rows($queryTotalReviews);
?>
<section>
<div class="container mw-100 animwo" id="box" style=" color:white; padding-top: 30px; margin-top: 60px; width:60%; padding-left:0; padding-right:0">
    <div class="row justify-content-md-center">
        <div class="col-md-auto">
            <h1 style="text-align: center;" class="fadeInUp">User Reviews</h1>
            <hr style="border-top: 1px solid white; margin-bottom: 6px; margin-top: 10px">
            <br>
        </div>
    </div>
        <div class="row justify-content-md-center">
            <div class="w-100"></div>
            <p>Jumlah User Mereview: <?php echo $numTotalRev; ?></p>
        </div>
        
            <div class="table-responsive" >
                <table class="table table-striped table-image">
                    <thead >
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">username</th>
                            <th scope="col">Rating</th>
                            <th scope="col">Komentar</th>                 
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $query = "SELECT * FROM user_rating";
                        $result = mysqli_query($conn, $query);
                        if(!$result){
                        die ("Query Error: ".mysqli_errno($conn).
                        " - ".mysqli_error($conn));
                        }
                        $ID = 1;
                        while($row = mysqli_fetch_assoc($result))
                        {
                            $tempRate = $row['rating'];

                            if($tempRate == 1){
                                $rateKom = "★";
                            }
                            elseif($tempRate == 2){
                                $rateKom = "★★";
                            }
                            elseif($tempRate == 3){
                                $rateKom = "★★★";
                            }
                            elseif($tempRate == 4){
                                $rateKom = "★★★★";
                            }
                            elseif($tempRate == 5){
                                $rateKom = "★★★★★";
                            }
                            else{
                                $rateKom = "Tidak ada data";
                            }
                    ?>
                        <tr>
                        <td class="td-sm sm-font"><?php echo $ID; ?></td>
                        <td class="td-sm sm-font"><?php echo $row['namalengkap']; ?></td>
                        <td class="td-sm sm-font" style="font-size: 25px;"><?php echo $rateKom; ?></td>
                        <td class="td-sm sm-font"><?php echo $row['komentar']; ?></td>
                        </tr>
                        <?php
                            $ID++;
                            }
                        ?>
                    </tbody>
                </table>
            </div>
    </div>
</div>




</section>
</body>
</html>