
<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
// session_start();
// if (session_status() == PHP_SESSION_NONE){
// header('Location: login.php');
// }
// else{
// header('Location: index.php');
// }
if (isset($_SESSION['role'])) {
    $_SESSION['role'] ;
   }else {
      // $_SESSION['role']++;
   }
?>
<!DOCTYPE html>
<html>
<head>

<meta charset = "utf-8">
</head>
<style>
.font-in-c {
        color:GrayText;
        font-family: Times New Roman-Serif;
        align-items: center;
        justify-content: center;
        text-align: center;
      padding-top: 408px;
    }
    
.body-hom {
  background: white;
    background-image: url(https://img.freepik.com/premium-photo/puppy-dog-border-collie-stethoscope-isolated-blue-background-little-dog-reception-veter_80942-9176.jpg?w=2000);
  /* background-image: url(2.png); */
  background-repeat: no-repeat;
  background-size: 1550px 457px;
  width: 100%;
  min-height: 100vw;
  display: flex;
  flex-direction: column;
  overflow-x: hidden;}
  .Emergenc{
color: rgb(4,73,138);
position: absolute;
      top: 748px;
left: 127px;
font-family: Times New Roman-Serif
  }
  .treatmen {
   color: rgb(4,73,138);
position: absolute;
    top: 745px;
left: 506px;
font-family: Times New Roman-Serif;
}

</style>
<?php

// if (session_status() == PHP_SESSION_ACTIVE) {
// header('Location: index.php');
// }
// session_start();
// if( $_SESSION['loginuser']!=null){
// include 'header_admin.php';
// include('location :header.php');
include 'header.php';
// }

// if($_SESSION['loginadmin']!=null){
// 
// }


?>
<body class="body-hom" >
    

<div class="font-in-c">

<h1> Welcome to VetManager</h1><br>
<p>We Promise to deliver medical and surgical care of the highest quality according to high standards.

</p>
 </div>
 
 <div class="font-in-center3">
<h1> Our Services</h1><br>

 </div>

<div class="Surgery2" ><h2 >Vaccination</h2></div>
<div class="Emergenc" ><h2>Treatment</h2></div>
<div class="treatmen" ><h2> Emergency Care</h2></div>




<div class="row">
  <div class="column">
    <img src="image//photo1.jpg" alt="Treatment" style="width:100%">
  </div>
  <div class="column">
    <img src="image//photo2.jpg" alt="Emergency Care" style="width:100%">
  </div>
  <div class="column">
    <img src=
    "https://thumbs.dreamstime.com/b/cat-vaccine-pre-emptive-protection-diseases-veterinary-surgeon-giving-to-90310598.jpgg" alt="Vaccination" style="width:100%">
  </div>
</div>



</body>
</html>


<footer>
<div class ="footer-centet">
<h3> contact us :<h3>
<ul class ="socials">
<li><p>
<a class ="footer-link" href = "mailto:VetManager55@gmail.com"><img src = "image//email.png" width ="30"></a></p></li>

<li><p><a class ="footer-link-tel" href = "tel:+254793989295"><img src = "image//phone-call.png" width ="30"> </a></p></li>
</ul>

</div>
<div class ="footer-left">
</div>
</footer>


</body>
</html>
