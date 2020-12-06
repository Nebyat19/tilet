<?php 
  session_start(); 
?>

<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1">
  
    <link href=" https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/d-style.css">
    <link rel="script" href="css/side.js">
    
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <title>contact</title>
    <style>
   
    </style>
    
</head>
<script> 
/*
function myfunction(){
 let allscreens = document.getElementsByClassName("sidebar");
  for (var i = 0; i < allscreens.length; i++ ) {
    allscreens[i].style.display = "none";
  }


}
*/

</script>


<body>
<input type="checkbox" id="chkSelector"  value="1" >
    <div  class="sidebar"> 
        <div class="sidebar-header">
            <h3 class="brand"><span class="ti-unlink">
<span>Tiletinvest</span>
            </span></h3>
        
         <label id="menu-icon" class="ti-menu-alt" for="chkSelector"></label>
      
           
        </div>
        <div class="slidebar-menu">

        <ul>
            <li>
                <a href="" onclick="toggle();">
            <span class="ti-home"></span>
            <span >Home</span></a>
           
           </li>
       <li>
           <a href="Referrals.php">
           <span class="ti-gift"></span>
           <span>Referrals</span>
       </a></li>
       <li>
           <a href="Profile.php">
           <span class="ti-user"></span>
           <span> Profile </span>
       </a></li>
       <li>
           <a href="Withdraw.php">
           <span class="ti-money"></span>
           <span>Withdraw</span>
       </a></li>
       <li><a href="contact.php">
       <span class="ti-folder"></span>
       <span class="about">Contact us</span>
   </a></li>
   
       <li><a href="about.php">
       <span class="ti-book"></span>
       <span>About</span>
</a></li><li>
<a href="">
    <span class="ti-settings"></span>
    <span>Log out</span>
</a></li>
    </ul>
        </div>
        </div>




        <div class="main-content">
            <header>

                <div class="search-wrapper">
                    <span class="ti-search"></span>
                    <input type="search" name="" placeholder="search" id="">
                </div>
                <div class="social-icons">
                
                <span style="color:red" class="ti-bell"></span>
                <span style="color:green" class="ti-comment"></span>
              <div></div>
            </div> 
 </header>

           <main>
          

           <div class="container-contact100">

<div class="wrap-contact100">
    <form class="contact100-form validate-form">
        <span class="contact100-form-title">
            Send Us A Message
        </span>

        <div class="wrap-input100 validate-input" data-validate="Please enter your name">
            <input class="input100" type="text" name="name" placeholder="Full Name">
            <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Please enter your email: e@a.x">
            <input class="input100" type="text" name="email" placeholder="E-mail">
            <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Please enter your phone">
          
            <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Please enter your message">
            <textarea class="input100" name="message" placeholder="Your Message"></textarea>
            <span class="focus-input100"></span>
        </div>

        <div class="container-contact100-form-btn">
            <button class="contact100-form-btn">
                <span>
                    <i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
                    Send
                </span>
            </button>
        </div>
    </form>
</div>
</div>

           </main>
    </div>
    <style>
.ti-folder{
    color:yellow;
}
.contact{
    color: rgb(200, 50, 30);
}
.title{
text-align: center;
font-size:24px;
color:rgb(10, 100,200);
padding-top: 10px;
padding-bottom: 10px;

}
.input{
    margin-right: 50px;
   


}
.input label {
    color:rgb(10, 200, 50);
   
}
.input-field{
   width: 200px;


}
.input-message{


}
.about{

    color:yellow;
}
    </style>
   <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>

</html>