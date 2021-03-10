<?php 

require_once 'controllers/authController.php'; 

// verify user token
if (isset($_GET['token'])) {
    $token = $_GET['token'];
    verifyUser($token);
}

// verify user token from forgot password
if (isset($_GET['password-token'])) {
    $passwordToken = $_GET['password-token'];
    resetPassword($passwordToken);
}

if (!isset($_SESSION['id'])) {
    header('location: login.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link rel="stylesheet" href="style.css">
    
    <title>Homepage</title>
</head>

<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form-div login">


        <?php if(isset($_SESSION['message'])): ?>
            <div class="alert <?php echo $_SESSION['alert-class']; ?>">
                <?php 
                
                echo $_SESSION['message']; 
                unset($_SESSION['message']);
                unset($_SESSION['alert-class']);
                
                ?> 
            </div>
        <?php endif; ?>

            <h3 style="color: black;">Welcome, <?php echo $_SESSION['namalengkap']; ?> </h3>

            <!-- <a href="index1.php?logout=1" class="logout">logout</a> -->
            
            <?php if(!$_SESSION['verified']): ?>
                <div class="alert alert-warning">
                    You need to verify your account.
                    Sign in to your emai account and click on the 
                    verification link we just emailed you at 
                <strong><?php echo $_SESSION['email']; ?> </strong>
                </div>
           
            <?php elseif($_SESSION['verified']): ?>
                <a href="dashboard_user.php" style="text-decoration: none;"><button class="btn btn-block btn-lg btn-primary">I'm Verified</button></a>
            <?php endif; ?>

            </div>
        </div>
    </div>

</body>
</html>