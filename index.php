<?php include('server.php') ?><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/style.css">
     <link href=" https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.min.css" rel="stylesheet">
     
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
     <title>log in</title>
</head>
    <body>
        <div class="hero">
        
        <div class="form-box">
            <div class="button-box">
         <div id="btn"></div>
         
<button type="button" class="toggle-btn" onclick="Login()">sign in</button>
<button type="button" class="toggle-btn" onclick="Register()">sign up</button>
            </div>
            <center><div class="social-icons"><img src="img/user3.jpg" alt=""></div></center>

        <form id="login" class="input-group" method="POST" action="index.php">
        <?php include('errors.php'); ?>
            <input type="text" class="input-field" placeholder="username " value="<?php if(isset($_COOKIE["user_login"])) { echo $_COOKIE["user_login"]; } ?>" name="username" required>
            <input type="password" class="input-field" placeholder="password " value="<?php if(isset($_COOKIE["userpassword"])) { echo $_COOKIE["userpassword"]; } ?>" class="input-field" name="password" required>
           <input type="checkbox" class="check-box"name="remember" id="remember" <?php if(isset($_COOKIE["user_login"])) { ?> checked <?php } ?> ><span>Remember me <a class="fo" href="forgot.php" id="forgot">Forgot password</a></span>
          <div class="forgot"></div>
       <br> <center><button type="submit" class="submit-btn" name="login_user">log in</button></center>
       
        </form>
        <form id="register" class="input-group" action="index.php" method="POST">
        <?php include('errors.php'); ?>
            <input type="text" class="input-field" placeholder=" username" name="username"  required>
            <input type="email" class="input-field" placeholder=" email " name="email"  required>
            <input type="password" class="input-field" placeholder="password " name="password_1"required>
            <input type="password" class="input-field" placeholder="confirm password" name="password_2" required>
           <input type="checkbox" name="check" value="yes" class="check-box"><span><a href="responsive/term.html">I agreed to terms and conditions </a> </span>
        <br> <center><button type="submit" class="submit-btn" name="reg_user" >Register</button></center>
        
        </form>
        </div> 
        
        </div>
        <script>
            var x=document.getElementById("login");
            var y=document.getElementById("register");
            var z=document.getElementById("btn");
            function Register(){
                x.style.left="-300px";
                y.style.left="10px";
                z.style.left="110px";
                
                } 
            
                function Login(){
                 
                x.style.left="10px";
                y.style.left="450px";
                z.style.left="0px";
                
                } 
         </script>
    </body>
</html>