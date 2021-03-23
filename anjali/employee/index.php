<?php 
include("header.php");
session_start();
include 'connect.php';
$email=$_SESSION['email'];
$s="select * from employee where email='$email'";                
$s1=mysqli_query($con,$s);
while($row=mysqli_fetch_array($s1))
{
$emp_id=$row[0];
$f_name=$row[1];
$l_name=$row[2];
$gender=$row[3];
$department=$row[4];
$designation=$row[5];
$email=$row[6];
$address=$row[7];
$mobile=$row[8];
$salary=$row[9];
$join_date=$row[10];
$dob=$row[11];
$password=$row[12];
$c_password=$row[13];
$status=$row[14];
}?>
<script> var year=new Date().getFullYear();
		 var month=new Date().getMonth()+1;</script>
    
    <div class="hero-wrap" style="background-image: url('images/profile1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-lg-6 col-md-6 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> PLATAFORMA <br><span>HR LITE</span></h1>
				 <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="icon-calendar mr-2"></span><script>document.write(new Date());</script></p>
				</div>
          <div class="col-lg-6 col-md-6 mt-0 mt-md-5">
      <div class="container">
        <div class="row">
	        <div class="col-md-12 ftco-animate">
	          <div class="block-7 active">
	            <div class="text-center">
	            <span class="price"><span class="number">PROFILE</span></span>
		        <img src="images/contact.webp"style="width:150px;height:150px;"></img><br><br>
	            <h2 class="heading">Employee name:<?php echo $f_name?>&nbsp;<?php echo $l_name;?></h2>
	            <span class="excerpt d-block">Employee ID:<?php echo $emp_id?></span>
				<span class="excerpt d-block">Email ID:<?php echo $email?></span>
				<span class="excerpt d-block">Department:<?php echo $department?></span>
				<span class="excerpt d-block">Designation:<?php echo $designation?></span>
				<span class="excerpt d-block">Date of Joining:<?php echo $join_date?></span>
				<span class="excerpt d-block">_____________________________________________________________________</span>
					</div>
				</div>
	        </div>
	      </div>
      </div>
          </div>
        </div>
      </div>
    </div>
	
	
	<section class="ftco-section services-section bg-primary">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-guest"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Employees</h3>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-world"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Global</h3>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-idea"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Ideas</h3>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-handshake"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Community</h3>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>