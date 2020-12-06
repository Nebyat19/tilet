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
    <title>About</title>
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
                <a href="index.php" onclick="toggle();">
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
    <span>Contact us</span>
</a></li>

    <li><a href="about.php">
    <span class="ti-book"></span>
    <span class="about">About</span>
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
          
              

 <div class="title"><h2> Welcome </h2></div>
             
             <div class="Welcome">
<p>    
At Tilet investment, we believe ever one  deserves to make money online and 
now we are on a journey of big investments here in Ethiopia. 
<br> So as you sign up in this website you will be a part of our investment journey. 
 We are excited to have you in our journey 

</p>

             </div>
             
 <div class="logo"><img src="img/logo.jpg" alt=""></div>

           </main>
    </div>
    <style>
.title{
    font-family: Arial, Helvetica, sans-serif;
    margin-top: 10px;
    margin-bottom: 10px;
    font-size: 23px;
    text-align: center;
    color:rgb(25, 110, 115);
}

.Welcome{
    font-family: Arial, Helvetica, sans-serif;
 right: 15px;

    text-align: left;
    
   
    color:  #027581;
    padding: 10px;


}
@media only screen and (max-width: 840px) {
    .Welcome{
    font-family: Arial, Helvetica, sans-serif;
  margin-right: 15px;

    text-align: left;
    
   
    color: rgb(10, 200, 20);
    padding: 10px;


}

}
img{
    background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    max-width: 100%;
  height: auto;
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 100%;

}
.about{
    
    color:yellow;
}
.ti-book{
    color:yellow;

}
    </style>
   
</body>

</html>