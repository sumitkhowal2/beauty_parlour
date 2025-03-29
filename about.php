<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
include("./includes/header.php");
?>

<!-- breadcrumbs -->
    <section class="w3l-inner-banner-main">
        <div class="about-inner about ">
            <div class="container">   
                <div class="main-titles-head text-center">
                <h3 class="header-name ">
					About Us
                </h3>
            </div>
</div>
   </div>
   <div class="breadcrumbs-sub">
   <div class="container">   
    <ul class="breadcrumbs-custom-path">
        <li class="right-side propClone"><a href="index.php" class="">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a> <p></li>
        <li class="active ">About</li>
    </ul>
</div>
</div>
        </div>
    </section>
<!-- breadcrumbs //-->
<section class="w3l-content-with-photo-4"  id="about">
    <div class="content-with-photo4-block ">
        <div class="container">
            <div class="cwp4-two row">
            <div class="cwp4-image col-xl-6">
                <img src="assets/images/b2.jpg" alt="product" class="img-responsive rounded-2  about-me">
            </div>
                <div class="cwp4-text col-xl-6">
                    <div class="posivtion-grid">
                    <h3 class="">Beauty and success starts here</h3>
                    <div class="hair-two-colums">
                        <div class="hair-left">
<h5>
    Waxing</h5>
</div>
                        <div class="hair-left">
                            <h5>Facial</h5>
                        </div>
                            <div class="hair-left">
                                                        <h5>Hair makeup</h5>

                                                    </div>
                                                                                <div class="hair-left">
                                                                                    <h5>Massage</h5>
                                    
                                                                                </div>
                                                                                 <div class="hair-left">
                                                                                    <h5>Menicure</h5>
                                                                                </div>

   <div class="hair-left">
                                                                                    <h5>Pedicure</h5>
                                                                                </div>
                                                                                   <div class="hair-left">
                                                                                    <h5>Hair Cut</h5>
                                                                                </div>

                                                                                   <div class="hair-left">
                                                                                    <h5>Body Spa</h5>
                                                                                </div>

                    
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
</section>

<section class="w3l-recent-work">
	<div class="jst-two-col">
		<div class="container">
<div class="row">
		<div class="my-bio col-lg-6">

	<div class="hair-make">
		<?php

$ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
		<h5><a href="blog.html"><?php  echo $row['PageTitle'];?></a></h5>
		<p class="para mt-2"><?php  echo $row['PageDescription'];?></p><?php } ?>
	</div>
	
	
	</div>
	<div class="col-lg-6 ">
		<img src="assets/images/b3.jpg" alt="product" class="img-responsive rounded-2 about-me">
	</div>

</div>
		</div>
	</div>
</section>
<?php include_once('includes/footer.php');?>
