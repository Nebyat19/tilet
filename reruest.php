<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
// initializing variables
$username = "";
$email    = "";
$errors = array(); 

session_start();
$db = mysqli_connect('localhost', 'root', '', 'login');

if (isset($_POST['request_pass'])) {

    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }

    $user_check_query = "SELECT * FROM users WHERE username='$username' AND email='$email' And active='1'";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
      
    if ($user) { // if user exists
if($user['active'] =0) {echo "please activate your account";} 
      elseif ($user['username'] === $username) {
        echo "check your email";
      $hash=$user['hash'];
      header('location: check_email.php');
       $mail = new PHPMailer(true);
   
   
         try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'cty0242@gmail.com';                      // SMTP username
            $mail->Password   = 'Adam@0948277843';                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 465;                                     // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
        
            //Recipients
            $mail->setFrom('mail.servise.com@gmail.com ', 'Tilet investment');
            $mail->addAddress($email, $username);     // Add a recipient
            $mail->addAddress($email);               // Name is optional
          
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'email varification';
            $mail->Body    = '
          
            Thanks for signing up!
              
            Please click this link to activate your account:       https://44888e62f176.ngrok.io/tutor/new_pass.php?email='.$email.'&hash='.$hash.'
            
            
            ';
            $mail->AltBody = ' Please click this link to activate your account:  https://53c7dab06ead.ngrok.io/tutor/new_pass.php?email='.$email.'&hash='.$hash.'
            ';
        
            $mail->send();
           
            echo "check your email";
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";  } 
      
        }  else echo "user not registered";   

    }else echo "user not registered";
     
   




}


?>