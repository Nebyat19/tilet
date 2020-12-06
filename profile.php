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
    <link icon="" >
    <title>profile</title>
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
        <span class="about"> Profile </span>
    </a></li>
    <li>
        <a href="Withdraw.php">
        <span  class="ti-money"></span>
        <span >Withdraw</span>
    </a></li>
    <li><a href="contact.php">
    <span class="ti-folder"></span>
    <span>Contact us</span>
</a></li>

    <li><a href="about.php">
    <span class="ti-book"></span>
    <span >About</span>
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
         <center><img src="img/user3.jpg" alt=""></center>
             
   <form action="">
<div class="value-group">
<label class="user" for="">user name:</label>
<label  class="value" for="">$username</label><br>
<label class="user"  for="">email:</label>
<label id="email" class="value" for="">$email</label>
</div>
<div class="settings">
<center><h2>update profile</h2></center>

</div>


   </form>

           </main>
    </div>






    <style>
 :root{

--main-color: #027581;
--color-dark: #1D2231;
--text-grey: #8390A2;
}
.value-group{
    margin-bottom: 1rem;
    padding-bottom: 1rem;
    margin-left: 2rem;
    margin-top: 2rem;
width: 80%;
height: auto;
background-color:#f3f6f8;

}
.value{
    color:  #027581;
    margin-left: 2rem;
    margin-top: 1rem;

}
#email{
    margin-top: 2rem;
    padding-left: 2.3rem;
}
.user{
    color: grey;
    margin-top: 2rem;
    margin-left: 2rem;
margin-top: 3rem;

}
.settings h2{
color:#027581 ;

}
 img{
     margin-top: 50px;
     width:150px;
     height: auto;
     border-radius: 100%;
 }
.row h4{
  padding: 12px;
}
.about{
    font-family: Ubuntu-Bold, sans-serif;
    color:yellow;
}
.ti-user{
    color:yellow;

}


    </style>
   
</body>

</html>