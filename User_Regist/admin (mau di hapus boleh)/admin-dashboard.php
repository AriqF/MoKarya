<?php



    $currentPage = 'dashboard';   
    include 'header-admin.php';
    
    $queryUs = mysqli_query($conn, "SELECT nim FROM users");
    $totalUsers = mysqli_num_rows($queryUs);

    $queryAd = mysqli_query($conn, "SELECT id_admin FROM admin");
    $totalAdmin = mysqli_num_rows($queryAd);

    $queryKar = mysqli_query($conn, "SELECT id FROM data_karya");
    $totalKarya = mysqli_num_rows($queryKar);

    $queryUV = mysqli_query($conn, "SELECT nim FROM users WHERE verified = 1");
    $totalVerUs = mysqli_num_rows($queryUV);

    $queryUNV = mysqli_query($conn, "SELECT nim FROM users WHERE verified <> 1");
    $totalNVerUs = mysqli_num_rows($queryUNV);

?>

<section>
    <div class="jumbotron">
        <div class="container fadeInDown" id="box" style=" margin-top: 50px; color:white; padding-top: 30px; margin-bottom: 40px; height:fit-content">
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
    <div class="container fadeInUp">
    <div class="row chartBox d-flex justify-content-center">                        
        <div class="col-6 d-flex justify-content-center">
            <div id="chart" style="height: 220px;"></div>              
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
    { entity: 'Karya', value:  <?php echo $totalKarya; ?>}
  ],
  xkey: 'entity',
  ykeys: ['value'],
  labels: ['Value'],

  hidehover:false,

  resize: true
});
new Morris.Donut({
  element: 'verifiedUserChart',
  data: [
    { label: 'Verified-User', value: <?php echo $totalVerUs; ?>},
    { label: 'Unverified-User', value:  <?php echo $totalNVerUs; ?>}, // ubah <.?php echo $totalNVerUs; ?> ke angka jika ingin melihat demo chart dlm keadaan label ini berisi nilai
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
