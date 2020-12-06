function myfunction() {
    // Get the checkbox
    var state = document.getElementById("sidebar").style.display;
    //var checkBox = document.getElementById("chkSelector");
    // Get the output text
    //var text = document.getElementByclass("sidebar");
  
   // // If the checkbox is checked, display the output text
   // if (checkBox.checked == true){
  //    text.style.display = "none";
   // } else {
   //   text.style.display = "block";
   // }
 // }
 if(state=="block"){
    document.getElementById("sidebar").style.display = 'none';

 }else{
    document.getElementById("sidebar").style.display = 'block';
 }
}