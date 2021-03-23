<?php 
session_start();
include("header.php");
$email=$_SESSION['email'];
?> 
<style>
.color-box
{
width:340px;
height:50px;
background-color:#AEEBF1;
}
</style> 
    <div class="hero-wrap" style="background-image: url('images/dark.jpg');" data-stellar-background-ratio="0.9">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-lg-0 col-md-0 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          </div>
          <div class="col-lg-0 col"></div>
          <div class="col-lg-12 col-md-0 mt-0 mt-md-0">
		<section class="ftco-section contact-section">
     <div class="color-box"> 
			  <h2>Complaint Registration</h2>
			</div><br>
       
            <form method="POST" action="complaint_action.php" class="bg-light p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" required name="email" value="<?php echo $email;?>" placeholder="Enter Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control"required name="subject" placeholder="Enter Subject">
              </div>
              <div class="form-group">
                <textarea  cols="30" rows="7"  name="detail" required class="form-control" placeholder="Enter Complaint In Detail"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="SUBMIT" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
          	<div id="map" class="bg-white"></div>
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