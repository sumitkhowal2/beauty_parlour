<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
include('./includes/header.php');
if (strlen($_SESSION['bpmsuid']==0)) {
  header('location:logout.php');
  } else{



  ?>
<!-- breadcrumbs -->
<section class="w3l-inner-banner-main">
    <div class="about-inner contact ">
        <div class="container">   
            <div class="main-titles-head text-center">
            <h3 class="header-name ">
                
Appointment Confirmation
            </h3>
        </div>
</div>
</div>
<div class="breadcrumbs-sub">
<div class="container">   
<ul class="breadcrumbs-custom-path">
    <li class="right-side propClone"><a href="index.php" class="">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a> <p></li>
    <li class="active ">
        Thank You</li>
</ul>
</div>
</div>
    </div>
</section>
<!-- breadcrumbs //-->
<section class="w3l-contact-info-main" id="contact">
    <div class="contact-sec	">
        <div class="container">

            <div>
                
 
                    <h4 class="w3ls_head">Thank you for applying. Your Appointment no is <?php echo $_SESSION['aptno'];?> </h4>
                    
       
    </div>
   
    </div></div>
</section>
<?php include_once('includes/footer.php');?>
<?php } ?>