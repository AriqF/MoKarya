<?php 
// harus install composer di getcomposer.org
// ke website https://swiftmailer.symfony.com/docs/introduction.html
// masuk ke project ex: D:\xampp\htdocs\User_Regist> composer require "swiftmailer/swiftmailer:^6.0"


require_once 'vendor/autoload.php';
require_once 'config/constants.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
  ->setUsername("mokaryad4@gmail.com")
  ->setPassword("mokarya.123");

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);



function SendVerificationEmail($userEmail, $token)
{
    global $mailer;

    $body = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">      
        <title>Verify Email</title>
    </head>
    <body>
    
        <div class="wrapper">
            <p>
                Thank you for signing up on our website. Please click on the link below
                to verify your Email.
            </p>
            <a href="http://localhost/WebProject-Mokarya/User_Regist/index1.php?token=' . $token . '">
                Verify Your Email Address
            </a>
        </div>
    
    </body>
    </html>';

    // Create a message
    $message = (new Swift_Message('Verify Your Email Address'))
    ->setFrom("mokaryad4@gmail.com")
    ->setTo($userEmail)
    ->setBody($body, 'text/html');

    // Send the message
    $result = $mailer->send($message);
}


function SendPasswordResetLink($userEmail, $token)
{
    global $mailer;

    $body = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">      
        <title>Verify Email</title>
    </head>
    <body>
    
        <div class="wrapper">
            <p>
                Hello There,

                Please click on the link below to reset your password.
            </p>
            <a href="http://WebProject-Mokarya/Mango/User_Regist/index1.php?password-token=' . $token . '">
                Reset your password
            </a>
        </div>
    
    </body>
    </html>';

    // Create a message
    $message = (new Swift_Message('Reset your password'))
    ->setFrom("mokaryad4@gmail.com.com")
    ->setTo($userEmail)
    ->setBody($body, 'text/html');

    // Send the message
    $result = $mailer->send($message);
}