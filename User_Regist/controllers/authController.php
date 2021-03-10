<?php

session_start();

require 'config/db.php';

require_once 'emailController.php';

$errors = array();
$username = "";
$email = "";

// if user click sign up button
if (isset($_POST['signup-btn'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConf = $_POST['passwordConf'];

    // validation
    if (empty($username)) {
    $errors['username'] = "<font color='red'; > Username Required </font>";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "<font color='red'; > Email Address Is Invalid </font>";
    }
    if (empty($email)) {
        $errors['email'] = "<font color='red'; > Email Required </font>";
    }
    if (empty($password)) {
        $errors['password'] = "<font color='red'; > Password Required </font>";
    }
    if ($password !== $passwordConf) {
        $errors['password'] = "<font color='red'; > The Password do not match </font>";
    }

    $emailQuery = "SELECT * FROM users WHERE email=? LIMIT 1";
    $stmt = $conn->prepare($emailQuery);
    $stmt->bind_param('s',$email);
    $stmt->execute();
    $result = $stmt->get_result();
    $userCount = $result->num_rows;
    $stmt->close();

    if ($userCount > 0) {
        $errors['email'] = "<font color='red'; > Email already exists </font>";
    }
    
    $usernameQuery = "SELECT * FROM users WHERE username=? LIMIT 1";
    $stmt = $conn->prepare($usernameQuery);
    $stmt->bind_param('s',$username);
    $stmt->execute();
    $result = $stmt->get_result();
    $userCount = $result->num_rows;
    $stmt->close();

    if ($userCount > 0) {
        $errors['username'] = "<font color='red'; > Username already exists </font>";
    }

    if (count($errors) === 0){
        $password = password_hash($password, PASSWORD_DEFAULT);
        $token =  bin2hex(random_bytes(50));
        $verified = FALSE;

        $sql = "INSERT INTO users (username, email, verified, token, password) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssbss', $username, $email, $verified, $token, $password);

        if ($stmt->execute()) {
        //login user automatic
        $user_id = $conn->insert_id;
        $_SESSION['id'] = $user_id;
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['verified'] = $verified;

        SendVerificationEmail($email, $token);

        // flash message
        $_SESSION['message'] = "You are now logged in";
        $_SESSION['alert-class'] = "alert-success";
        header('location: index1.php');
        exit();
        } else{
            $errors['db_error'] = "<font color='red'; > Database error: failed to register </font>";
        }
    }

}


// if user click login button
if (isset($_POST['login-btn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // validation
    if (empty($username)) {
    $errors['username'] = "<font color='red'; > Username Required </font>";
    }
    if (empty($password)) {
        $errors['password'] =  "<font color='red'; > Password Required </font>";
    }

    if (count($errors) === 0) {
      $sql = "SELECT * FROM users WHERE email=? OR username=? LIMIT 1";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param('ss', $username, $username);
      $stmt->execute();
      $result = $stmt->get_result();
      $user = $result->fetch_assoc();
    
      if (password_verify($password, $user['password'])) {
            //login sucess
            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['verified'] = $user['verified'];
            // flash message
            $_SESSION['message'] = "You are now logged in";
            $_SESSION['alert-class'] = "alert-success";
            header('location: hiragana.php');
            exit();
    
        } else {
            $errors['login_fail'] = "<font color='red'; >Wrong Credentials </font>";
        }
        
    }

}

//logout user
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['id']);
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['verified']);
    header('location: login.php');
    exit();
}

// verify user token
function verifyUser($token)
{
    global $conn;
    $sql = "SELECT * FROM users WHERE token='$token' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $update_query = "UPDATE users SET verified=1 WHERE token='$token' ";

        if (mysqli_query($conn, $update_query)) {
            // log user in
            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['verified'] = 1;
            // flash message
            $_SESSION['message'] = "Your Email was Succesfully verified";
            $_SESSION['alert-class'] = "alert-success";
            header('location: index1.php');
            exit();
        }
    } else {
        echo 'User not found';
    }

}

// if user click forgot password
if (isset($_POST['forgot-password'])) {
    $email = $_POST['email'];

    if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "<font color='red'; > Email Address Is Invalid </font>";
    }
    if (empty($email)) {
        $errors['email'] = "<font color='red'; > Email Required </font>";
    }
    if (count($errors) === 0) {
        $sql = "SELECT * FROM users WHERE email='$email' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_assoc($result);
        $token = $user['token'];
        SendPasswordResetLink($email, $token);
        header('location: password_message.php');
        exit(0);
    }

}


// if user clicked reset password
if (isset($_POST['reset-password-btn'])) {
    $password = $_POST['password'];
    $passwordConf = $_POST['passwordConf'];

    if (empty($password) || empty($passwordConf)) {
        $errors['password'] = "<font color='red'; > Password Required </font>";
    }
    if ($password !== $passwordConf) {
        $errors['password'] = "<font color='red'; > The Password do not match </font>";
    }

    $password = password_hash($password, PASSWORD_DEFAULT);
    $email = $_SESSION['email'];

    if (count($errors) === 0) {
        $sql = "UPDATE users SET password='$password' WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header('location: login.php');
            exit(0);
        }
    }
}



function resetPassword($token) 
{
    global $conn;
    $sql = "SELECT * FROM users WHERE token='$token' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);
    $_SESSION['email'] = $user['email'];
    header('location: reset_password.php');
    exit(0);
}

