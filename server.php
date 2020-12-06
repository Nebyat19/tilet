
<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'login');

// REGISTER USER
if (isset($_POST['reg_user'])) {

  if(!empty($_POST['check'])){
 
   
  
  
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database
    $hash = md5( rand(0,1000) );
  	$query = "INSERT INTO users (username, email, password, hash) 
  			  VALUES('$username', '$email', '$password', '$hash ')";
    mysqli_query($db, $query);
  	//$_SESSION['username'] = $username;
   // $_SESSION['success'] = "You are now logged in";
    header('location: se_email.php');
 
    /*email ***************************************************************** */
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'cty0242@gmail.com';                     // SMTP username
        $mail->Password   = 'Adam@0948277843';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
        //Recipients
        $mail->setFrom('mail.servise.com@tilet.com ', 'Tilet investment');
        $mail->addAddress($email, $username);     // Add a recipient
        $mail->addAddress($email);               // Name is optional
       // $mail->addReplyTo('adamweiss651@gmail.com', 'Information');
       // $mail->addCC('cc@example.com');
       // $mail->addBCC('bcc@example.com');
    
        // Attachments
       // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
       // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'email varification';
        $mail->Body    = '
      
        Thanks for signing up!
        Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
          
        ------------------------
        Username: '.$username.'

        ------------------------
          
        Please click this link to activate your account:   https://44888e62f176.ngrok.io/tutor/verify.php?email='.$email.'&hash='.$hash.'
        
        
        ';
        $mail->AltBody = ' Please click this link to activate your account:  https://53c7dab06ead.ngrok.io/tutor/verify.php?email='.$email.'&hash='.$hash.'
        ';
    
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
 }   }else array_push($errors, "please agree to the terms and conditions");}
 

//login*********************************************************
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password1 = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password1)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password = md5($password1);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password' And active='1'";
        $results = mysqli_query($db, $query);
       if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "";
          header('location: home.php');
      
        }else {
            array_push($errors,   $password);
        }
        
    }
  }
  //remember me*************************************************
  $db = mysqli_connect('localhost', 'root', '', 'login');
  if(isset($_POST["login_user"]))
{
  $username=$_POST['username'];
$password=md5($_POST['password']); // MD5 password encryption
$sql = "Select * from users where userName ='$username' and password ='$password'";
	$result = mysqli_query($db,$sql);
	$row = mysqli_fetch_array($result);
	if($row) {
          $_SESSION['username'] = $username;
          $_SESSION["userid"]= $row["ID"];
	// if remember me clicked . Values will be stored in $_COOKIE  array
			if(!empty($_POST["remember"])) {
//COOKIES for username
setcookie ("user_login",$_POST["username"],time()+ (10 * 365 * 24 * 60 * 60));
//COOKIES for password
setcookie ("userpassword",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));
} else {
if(isset($_COOKIE["user_login"])) {
setcookie ("user_login","");
if(isset($_COOKIE["userpassword"])) {
setcookie ("userpassword","");
				}
      }
      
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: home.php');
	} 
}
}
  ?>