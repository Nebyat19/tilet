<?php include('server.php') ?><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>new password</title>
</head>
<body>
    <div class="hero">
        
        <div class="form-box">
            <div class="button-box">
            <div id="btn"></div><div id="btn2"></div>

            <center><button type="button" class="toggle-btn" >New password</button></center> </div>
            <center><div class="social-icons"><img src="img/user3.jpg" alt=""></div></center>
<form id="pss_for" class="input-group" method="POST" action=" ">
       <input type="password" class="input-field" placeholder="new password " value="" name="password_1" required>      
        <input type="password" class="input-field" placeholder="confirm password" value=""  name="password_2" required>
       <br> <button type="submit" class="submit-btn" name="new_pass">confirm</button>
        </form>
       
        <?php
       
        $errors = array(); 
        
          $db = mysqli_connect('localhost', 'root', '', 'login');
            //mysql_connect("localhost", "root", "") or die(mysql_error()); // Connect to database server(localhost) with username and password.
           // mysql_select_db("login") or die(mysql_error()); // Select registration database.
                          
if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
    // Verify data
   
    $email = mysqli_real_escape_string($db, $_GET['email']); // Set email variable
    $hash = mysqli_real_escape_string($db, $_GET['hash']); // Set hash variable
    $query="SELECT * FROM users WHERE email='$email' AND hash='$hash' "; 
    $results= mysqli_query($db, $query);
   //  $results = mysql_query($db, $query); 
   // $result = mysqli_query($db, $user_check_query);
    //$match  = mysql_num_rows($search );
                  
    if (mysqli_num_rows($results) > 0) {
        if (isset($_POST['new_pass'])) {
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
  $password = md5($password_1);
        //mysql_query($db, "UPDATE users  SET  active='1' WHERE email='".$email."' AND hash='".$hash."' AND active='0'");
  $update="UPDATE users SET password='$password' WHERE email='$email' AND hash='$hash' ";
  mysqli_query($db, $update);
  $_SESSION['username'] = $username;
  $_SESSION['success'] = "success";
     header('location: home.php');
       }
       
      }
        // We have a match, activate the account
       
    else{ header('location: login.php');
        // No match -> invalid url or account has already been activated.
        echo '<div class="statusmsg">The url is  invalid.</div>';
    }
                  
}else{
    // Invalid approach
    header('location: login.php');
    //'<div class="statusmsg">Invalid approach, please use the link that has been send to your email.</div>';
}  
     
    /************************forgot */ 
     
     
     
     
     
     ?>
 
  
        </div></div> 

</body>
</html>