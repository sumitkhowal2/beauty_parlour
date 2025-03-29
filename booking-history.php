<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
include('includes/header.php');
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
                
 Booking History
            </h3>
            <p class="tiltle-para ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic fuga sit illo modi aut aspernatur tempore laboriosam saepe dolores eveniet.</p>
        </div>
</div>
</div>
<div class="breadcrumbs-sub">
<div class="container">   
<ul class="breadcrumbs-custom-path">
    <li class="right-side propClone"><a href="index.php" class="">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a> <p></li>
    <li class="active ">
        Booking History</li>
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
                <div class="cont-details">
                   <div class="table-content table-responsive cart-table-content m-t-30">
                    <h4 style="padding-bottom: 20px;text-align: center;color: blue;">Appointment History</h4>
                        <table border="2" class="table">
                            <thead class="gray-bg" >
                                <tr>
                                    <th>#</th>
                                <th>Appointment Number</th>
                                <th>Appointment Date</th>
                                <th>Appointment Time</th>
                                <th>Appointment Status</th>
                                <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                                <tr>
                                    <?php
                                   $userid= $_SESSION['bpmsuid'];
 $query=mysqli_query($con,"select tbluser.ID as uid, tbluser.FirstName,tbluser.LastName,tbluser.Email,tbluser.MobileNumber,tblbook.ID as bid,tblbook.AptNumber,tblbook.AptDate,tblbook.AptTime,tblbook.Message,tblbook.BookingDate,tblbook.Status from tblbook join tbluser on tbluser.ID=tblbook.UserID where tbluser.ID='$userid'");
$cnt=1;
$count=mysqli_num_rows($query);
if($count>0){
              while($row=mysqli_fetch_array($query))
              { ?>
               <tr>
    <td><?php echo $cnt;?></td>
<td><?php echo $row['AptNumber'];?></td>
<td><p> <?php echo $row['AptDate']?> </p></td> 
<td><?php echo $row['AptTime']?></td> 
<td><?php $status=$row['Status'];
if($status==''){
 echo "Waiting for confirmation";   
} else{
echo $status;
}
?>  </td>   

<td><a href="appointment-detail.php?aptnumber=<?php echo $row['AptNumber'];?>" class="btn btn-primary">View</a></td>       
</tr><?php $cnt=$cnt+1; } } else { ?>
                            <tr>
                                <th colspan="6" style="color:red">No Record Found</th>
                            </tr>

                          <?php } ?>
                             
                            </tbody>
                        </table>
                    </div> </div>
                
    </div>
   
    </div></div>
</section>
<?php include_once('includes/footer.php');?>
</html><?php } ?>