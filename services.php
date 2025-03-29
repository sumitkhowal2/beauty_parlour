<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
include('includes/header.php');
?>

<style>
    
    .service-card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
      display: flex;
      flex-direction: column;
      height: 100%; /* Ensures all cards are the same height */
  }
  .service-card:hover {
      transform: scale(1.05);
      box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.2);
  }
  .service-card img {
      height: 200px;
      object-fit: cover;
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
  }
  .card-body {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      flex-grow: 1; /* Makes sure all cards have equal height */
      text-align: center;
  }
  .service-name {
      font-size: 20px;
      font-weight: 700;
      color: #e91e63; /* Hot pink */
  }
  .service-description {
      font-size: 14px;
      color: #555;
      flex-grow: 1; /* Pushes content to fill space */
  }
  .service-cost {
      font-size: 18px;
      font-weight: 600;
      color: #ff4081;
  }
  .btn-book {
      background: #e91e63;
      color: white;
      border-radius: 25px;
      padding: 10px 20px;
      transition: 0.3s;
  }
  .btn-book:hover {
      background: #d81b60;
  }
</style>
<!-- Breadcrumbs -->
<section class="w3l-inner-banner-main">
    <div class="about-inner services">
        <div class="container text-center">
            <h3 class="header-name">Our Services</h3>
        </div>
    </div>
    <div class="breadcrumbs-sub">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li class="right-side propClone"><a href="index.php">Home <span class="fa fa-angle-right"></span></a></li>
                <li class="active">Services</li>
            </ul>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="w3l-recent-work-hobbies py-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            $ret = mysqli_query($con, "SELECT * FROM tblservices");
            while ($row = mysqli_fetch_array($ret)) {
            ?>
                <div class="col">
                    <div class="card service-card">
                        <img src="admin/images/<?php echo $row['Image']; ?>" class="card-img-top" alt="<?php echo $row['ServiceName']; ?>">
                        <div class="card-body">
                            <h5 class="service-name"><?php echo $row['ServiceName']; ?></h5>
                            <p class="service-description"><?php echo $row['ServiceDescription']; ?></p>
                            <p class="service-cost">₹<?php echo $row['Cost']; ?></p>
                            <a href="book-appointment.php" class="btn btn-book mt-auto">Book Now</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include_once('includes/footer.php');?>

