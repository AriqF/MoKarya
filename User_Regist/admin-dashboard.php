<?php

    $currentPage = 'dashboard';   
    include 'header-admin.php';
    
    $queryUs = mysqli_query($conn, "SELECT id FROM users WHERE usertype = 'user'");
    $totalUsers = mysqli_num_rows($queryUs);

    $queryAd = mysqli_query($conn, "SELECT id FROM users WHERE usertype = 'admin' ");
    $totalAdmin = mysqli_num_rows($queryAd);

    $queryKar = mysqli_query($conn, "SELECT id FROM data_karya");
    $totalKarya = mysqli_num_rows($queryKar);

    $queryUV = mysqli_query($conn, "SELECT nim FROM users WHERE verified = 1  AND usertype = 'user'");
    $totalVerUs = mysqli_num_rows($queryUV);

    $queryUNV = mysqli_query($conn, "SELECT nim FROM users WHERE verified <> 1 AND usertype = 'user'");
    $totalNVerUs = mysqli_num_rows($queryUNV);

    $queryReview = mysqli_query($conn, "SELECT rating FROM user_rating");
    $totalReview = mysqli_num_rows($queryReview);

    $rating1 = mysqli_query($conn, "SELECT rating FROM user_rating WHERE rating = 1");
    $totalR1 = mysqli_num_rows($rating1);

    $rating2 = mysqli_query($conn, "SELECT rating FROM user_rating WHERE rating = 2");
    $totalR2 = mysqli_num_rows($rating2);

    $rating3 = mysqli_query($conn, "SELECT rating FROM user_rating WHERE rating = 3");
    $totalR3 = mysqli_num_rows($rating3);

    $rating4 = mysqli_query($conn, "SELECT rating FROM user_rating WHERE rating = 4");
    $totalR4 = mysqli_num_rows($rating4);

    $rating5 = mysqli_query($conn, "SELECT rating FROM user_rating WHERE rating = 5");
    $totalR5 = mysqli_num_rows($rating5);

?>

<section>
    <div class="jumbotron">
        <div class="container fadeInDown" id="box" style=" margin-top: 40px; color:white; padding-top: 30px; height:fit-content">
            <div class="row justify-content-md-left">
                <div class="col-md-auto">
                    <h1 style="text-align: left;" class="fadeInDown">Welcome Onboard! </h1>
                    <hr style="border-top: 1px solid white; margin-bottom: 20px; margin-top: 10px"> 
                    <ul class="list-unstyled">
                        <li> 
                            <i class="fas fa-server"></i>
                             Server Status: 
                            <?php
                            if (fsockopen('localhost', 80)) {
                                echo(' Online');
                            } else {
                                echo(' Offline');
                            }
                            ?>
                        </li>
                        <li>
                            <i class="fas fa-clock"></i>
                             Server Time: <span id="time"></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container chartBox fadeInRight" style=" width:100%; margin-top: 40px">                     
        <div id="chart" style="height: 260px;"></div>                      
    </div> 
    <div class="container fadeInLeft" style="margin-top: 50px; width:100%; margin-bottom:60px">
        <div class="row chartBox d-flex justify-content-center">                        
            <div class="col-6 d-flex justify-content-center">
                <div id="reviewSumChart" style="height: 220px;"></div>              
            </div>
            <div class="col-6 d-flex justify-content-center">
                <div id="verifiedUserChart" style="height: 220px;"></div>           
            </div>
        </div>
    </div> 

<script>
new Morris.Bar({
  element: 'chart',
  data: [
    { entity: 'User', value:  <?php echo $totalUsers; ?>},
    { entity: 'Admin', value:  <?php echo $totalAdmin; ?>},
    { entity: 'Karya', value:  <?php echo $totalKarya; ?>},
    { entity: 'Review', value:  <?php echo $totalReview; ?>}
  ],
  xkey: 'entity',
  ykeys: ['value'],
  labels: ['Value'],

  hidehover:false,

  resize: true,
  barColors: ['#2F5AE2']
});

new Morris.Donut({
  element: 'verifiedUserChart',
  data: [
    { label: 'Verified-User', value: <?php echo $totalVerUs; ?>},
    { label: 'Unverified-User', value:  <?php echo $totalNVerUs; ?>}, // ubah <.?php echo $totalNVerUs; ?> ke angka jika ingin melihat demo chart dlm keadaan label ini berisi nilai
  ],
  labelColor: '#cfd2d6',
  resize: true
});

new Morris.Donut({
  element: 'reviewSumChart',
  data: [
    { label: '1 Star Review', value: <?php echo $totalR1; ?>},
    { label: '2 Star Review', value:  <?php echo $totalR2; ?>}, 
    { label: '3 Star Review', value: <?php echo $totalR3; ?>},
    { label: '4 Star Review', value:  <?php echo $totalR4; ?>}, 
    { label: '5 Star Review', value: <?php echo $totalR5; ?>}
  ],
  backgroundColor: '#ccc',
  labelColor: '#cfd2d6',
  colors: [
    '#FD3200',
    '#DA7109',
    '#EF6608',
    '#FD8D07',
    '#F5A922',
  ],
  resize: true
});

var timestamp = '<?=time();?>';
function updateTime(){
  $('#time').html(Date(timestamp));
  timestamp++;
}
$(function(){
  setInterval(updateTime, 1000);
});
</script>
</body>
</html>
</section>
