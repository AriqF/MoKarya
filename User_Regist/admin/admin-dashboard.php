<?php
    $currentPage = 'dashboard';   
    include 'header-admin.php';
    
    $queryUs = mysqli_query($conn, "SELECT nim FROM users");
    $totalUsers = mysqli_num_rows($queryUs);

?>

<section>
    <div class="jumbotron">
        <div class="row">
            <div class="col-6 col-md-4 d-flex justify-content-around">
                <div id="box3">
                    <h4>Total User: </h4>
                    <h5><?php echo $totalUsers; ?></h5>
                </div>
            </div>
            <div class="col-6 col-md-4 d-flex justify-content-around">
                <div id="box3">
                    <h4>Total Admin: </h4>
                    <p>-</p>
                </div>
            </div>
            <div class="col-6 col-md-4 d-flex justify-content-around">
                <div id="box3">
                    <h4>Total Karya: </h4>
                    <p>-</p>
                </div>
            </div>

        </div>
    </div>


</body>
</html>
</section>
