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
    <title>withdraw</title>
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
        <span  class="ti-money"></span>
        <span class="about">Withdraw</span>
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
         
             
           <h2 class="dash-title" > <center> Account detail</center> </h2>
              <div class="dash-cards">
                  <div class="card-single">
                      <div class="card-body">
                          <span class="ti-briefcase"></span>
                     <div>
                         <h5>Total point</h5>
                         <h4>$</h4>
                     </div>
                      </div>

                     <div class="card-footer">
                         <a href=""></a>
                  </div>
              </div>  
             
              
              <div class="card-single">
                      <div class="card-body">
                          <span class="ti-reload"></span>
                     <div>
                         <h5>By referrals </h5>
                         <h4>$</h4>
                     </div></div>
                     <div class="card-footer">
                         <a href=""></a>
                  </div>
              </div> 


              
              <div class="card-single">
                      <div class="card-body">
                          <span class="ti-gift"></span>
                     <div>
                         <h5>Lottery</h5>
                         <h4>$</h4>
                     </div></div>
                     <div class="card-footer">
                         <a href=""></a>
                  </div>
              </div> 

              <div class="card-single">
                      <div class="card-body">
                          <span class="ti-check-box"></span>
                     <div>
                         <h5>Visiting </h5>
                         <h4>$</h4>
                     </div> </div>
                     <div class="card-footer">
                         <a href=""></a>
                          </div>
              </div> 
                </div>
              <div class="card-single-2">
                      <div class="card-body-2">
                          
                     <div>
                         <h2>Amount in birr</h2>
                        
                     </div></div>
                     <div class="card-footer">
                         <a href="">$</a>
                  </div>
              </div> 
 
             
<div class="container">
  <form>
    <div class="row">
      <h3>Account and payment</h3>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Full Name"/>
        <div class="input-icon"><i class="ti-user"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="phone number" placeholder="phone number"/>
        <div class="input-icon"><i class="ti-"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Amount"/>
        <div class="input-icon"><i class="ti-"></i></div>
      </div>
    </div>
   
    
       
      </div>
    </div>
    <div class="row">
      <h4>Payment Details</h4>
      <div class="input-group">
        <input id="payment-method-card" type="radio" name="payment-method" value="1" >
        <label for="payment-method-card"><span><i class=""></i>card</span></label>
        <input id="payment-method-paypal" type="radio" name="payment-method" value="cash">
        <label for="payment-method-paypal"> <span><i class=""></i>Cash</span></label>
   <div class="select">    <div class="col-half"> 
     
      <div id="no" class="input-group input-group-icon">
       <input type="text"  placeholder="bank account number"></div>
       <select name="" id="Bank">
       <option value="dd">     CBE </option>
       <option value="dd"> ABYSSINIA  </option>
       <option value="dd">  DASHN  </option>
       <option value="dd">  HIBRET </option>
       <option value="dd"> AWASH </option>
       <option value="dd">  ANBESSA </option>
     </select> </div></div> </div>
 <br>
<center><button >Withdraw</button></center>
       
      </div>
    </div>
  
    </div>
  </form>
</div>  
              


           </main>
    </div>






    <style>
 
*,
*:before,
*:after {
  box-sizing: border-box;
}
.dash-title{
color: #027581 ;

}
.select{
  display: block;
}
 #payment-method-card:checked~ .select{

display: none;
      }
h4 {
  color: #027581;
}
input,
input[type="radio"] + label,
input[type="checkbox"] + label:before,
select option,
select {
  width: 100%;
  padding: 1em;
  line-height: 1.4;
  background-color: #f9f9f9;
  border: 1px solid #e5e5e5;
  border-radius: 3px;
  -webkit-transition: 0.35s ease-in-out;
  -moz-transition: 0.35s ease-in-out;
  -o-transition: 0.35s ease-in-out;
  transition: 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
}
#no{
padding-top: 8px;
left: .1rem;
width: 15rem;

}
#bank{
  padding-bottom: 10px;
}
input:focus {
  outline: 0;
  border-color: #64ac15;
}
input:focus + .input-icon i {
  color: #7ed321;
}
input:focus + .input-icon:after {
  border-right-color: #7ed321;
}
input[type="radio"] {
  display: none;
}
input[type="radio"] + label,
select {
  display: inline-block;
  width: 50%;
  text-align: center;
  float: left;
  border-radius: 0;
}
input[type="radio"] + label:first-of-type {
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
input[type="radio"] + label:last-of-type {
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
input[type="radio"] + label i {
  padding-right: 0.4em;
}
input[type="radio"]:checked + label,
input:checked + label:before,
select:focus,
select:active {
  background-color: #7ed321;
  color: #fff;
  border-color: #64ac15;
}
input[type="checkbox"] {
  display: none;
}
input[type="checkbox"] + label {
  position: relative;
  display: block;
  padding-left: 1.6em;
}
input[type="checkbox"] + label:before {
  position: absolute;
  top: 0.2em;
  left: 0;
  display: block;
  width: 1em;
  height: 1em;
  padding: 0;
  content: "";
}
input[type="checkbox"] + label:after {
  position: absolute;
  top: 0.45em;
  left: 0.2em;
  font-size: 0.8em;
  color: #fff;
  opacity: 0;
  font-family: FontAwesome;
  content: "\f00c";
}
input:checked + label:after {
  opacity: 1;
}
select {
  height: 3.4em;
  line-height: 2;
}
select:first-of-type {
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
select:last-of-type {
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
.row h3{
  padding-bottom: 5px;;
  color:027581;
}
select:focus,
select:active {
  outline: 0;
}
select option {
  background-color: #7ed321;
  color: #fff;
}
.input-group {
  margin-bottom: 1em;
  zoom: 1;
}
.input-group:before,
.input-group:after {
  content: "";
  display: table;
}
.input-group:after {
  clear: both;
}
.input-group-icon {
  left: -4rem;
  width: 28rem;
  position: relative;
}
.input-group-icon input {
  padding-left: 4.4em;
}
.input-group-icon .input-icon {
  position: absolute;
  top: 0;
  left: 0;
  width: 3.4em;
  height: 3.4em;
  line-height: 3.4em;
  text-align: center;
  pointer-events: none;
}
.input-group-icon .input-icon:after {
  position: absolute;
  top: 0.6em;
  bottom: 0.6em;
  left: 3.4em;
  display: block;
  border-right: 1px solid #e5e5e5;
  content: "";
  -webkit-transition: 0.35s ease-in-out;
  -moz-transition: 0.35s ease-in-out;
  -o-transition: 0.35s ease-in-out;
  transition: 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
}
.input-group-icon .input-icon i {
  -webkit-transition: 0.35s ease-in-out;
  -moz-transition: 0.35s ease-in-out;
  -o-transition: 0.35s ease-in-out;
  transition: 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
}
.container {
  max-width: 40rem;
  padding: 1em 3em 2em 1em;
  margin: 0em auto;
  background-color: #fff;
  border-radius: 4.2px;
  box-shadow: 0px 3px 10px -2px rgba(0, 0, 0, 0.2);
}
.row {
  max-width: 38em;
  margin-left: 5rem;
}
.row:before,
.row:after {
  content: "";
  display: table;
}
.row:after {
  clear: both;
}
.col-half {
  padding-right: 10px;
  float: left;
  width: 50%;
}
.col-half:last-of-type {
  padding-right: 0;
}
.col-third {
  padding-right: 10px;
  float: left;
  width: 33.33333333%;
}
.col-third:last-of-type {
  padding-right: 0;
}
@media only screen and (max-width: 540px) {
  .col-half {
    width: 100%;
    padding-right: 0;
  }
  .input-group-icon {
  left: -4rem;
  width: 7rem;
  position: relative;
}
}
button {
  background: #027581; /* Green */
  border: none;
  color: white;
  margin-bottom: 30px;
  margin-top: 2px;
  padding: 15px 50px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 10%;
}
@media only screen and (max-width: 640px) {
  .col-half {
    width: 100%;
    padding-right: 0;
  }
  .container{
    width: 25rem; 
  }
  .input-group-icon {
  left: -4rem;
  width: 20rem;
  position: relative;
}
}


/*form*************************/
.title{
    font-family: Ubuntu-Bold;
    margin-top: 10px;
    margin-bottom: 10px;
    font-size: 23px;
    text-align: center;
    color:rgb(25, 110, 115);
}

.Welcome{
    font-family: Ubuntu-Bold;
    margin-right: 0px;

    text-align: left;
    margin: 0, 10, 0, 0px;
   
    color: rgb(25, 110, 55);
    padding: 10px;


}
.logo{


 


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
.row h4{
  padding: 12px;
}
.about{
    font-family: Ubuntu-Bold, sans-serif;
    color:yellow;
}
.ti-money{
    color:yellow;

}


    </style>
   
</body>

</html>