<?php 


session_start();
require '../config/db.php'; 

$errors = array();
$user_admin = "";
$password_admin = "";


// LOGIKA 1
// if (isset($_POST['login-btn'])) {
//     $user_admin = $_POST['user_admin'];
//     $password_admin = $_POST['password_admin'];
//     $result = mysqli_query($conn, "SELECT * FROM admin WHERE user_admin = '$user_admin'");

//     if (mysqli_num_rows($result) === 1) {
      
//       $row = mysqli_fetch_assoc($result);
//       if (password_verify($password_admin, $row["password_admin"])){

//         //$_SESSION['login-admin-btn'] = true;

//         header('location: admin-dashboard.php');
//         exit;
//       }
//     }
//  $error = true;
// }






//LOGIKA 2
if (isset($_POST['login-btn'])) {
    $user_admin = $_POST['user_admin'];
    $password_admin = $_POST['password_admin'];


    if (empty($user_admin)) {
    $errors['user_admin'] = "<font color='red'; > Username Required </font>";
    }
    if (empty($password_admin)) {
        $errors['password_admin'] =  "<font color='red'; > Password Required </font>";
    }

    if (count($errors) === 0) {
      $sql = "SELECT * FROM admin WHERE user_admin=? LIMIT 1";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param('s', $user_admin);
      $stmt->execute();
      $result = $stmt->get_result();
      $admin = $result->fetch_assoc();
      $row_count= $result->num_rows;
      //print_r($row_count); die;// DEBUG purpose 
        
      if ($password_admin === $admin['password_admin']) {
            //login sucess
            $_SESSION['id_admin'] = $admin['id_admin'];
            $_SESSION['user_admin'] = $admin['user_admin'];
            header('location: admin-dashboard');
            exit();
    
        } else {
            echo "<script>alert('gagal masuk');window.location='login-admin';</script>";
            //echo "<script>alert('Berhasil masuk');window.location='admin-dashboard';</script>";
        }
        
    }

}

//logout user
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['id_admin']);
    unset($_SESSION['user_admin']);
    header('location:../');
    exit();
}
?>