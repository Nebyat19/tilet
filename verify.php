<?php include('server.php') ?>
        <?php
        session_start();
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
        //mysql_query($db, "UPDATE users  SET  active='1' WHERE email='".$email."' AND hash='".$hash."' AND active='0'");
  $update="UPDATE users SET active='1' WHERE email='$email' AND hash='$hash' ";
  mysqli_query($db, $update);
  $_SESSION['username'] = $username;
  $_SESSION['success'] = "success";
     header('location: home.php');
       
       
      }
        // We have a match, activate the account
       
    else{
        // No match -> invalid url or account has already been activated.
        echo '<div class="statusmsg">The url is either invalid or you already have activated your account.</div>';
    }
                  
}else{
    // Invalid approach
    echo '<div class="statusmsg">Invalid approach, please use the link that has been send to your email.</div>';
}  
     
    /************************forgot */ 
     
     
     
     
     
     ?>
        <!-- stop PHP Code -->
  
   