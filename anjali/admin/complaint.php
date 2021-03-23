<?php 
include("header.php");
include 'connect.php';
?>  
    <div class="hero-wrap" style="background-image: url('images/black1.jpg');" data-stellar-background-ratio="0.4	">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-lg-0 col-md-0 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          </div>
		  <form method="POST"  class="request-form ftco-animate">
     <h2><center>GRIEVANCES</center</h2>
          <div class="col-lg-0 col"></div>
	   <div class="col-lg-12 col-md-0 mt-0 mt-md-0">
	<div align="left"> 
	
	<table class="rwd-table" border="1">
  
  <tr>
    <th data-th="Movie Title" style="width:500px">COMPLAINT ID</th>
	<th data-th="Movie Title" style="width:500px">EMAIL</th>
	<th data-th="Movie Title" style="width:500px">SUBJECT</th>
	<th data-th="Movie Title" style="width:500px">REASON</th>
  </tr>
  <?php
$sql1="SELECT * from complaint";
$s1=mysqli_query($con,$sql1);
while($row=mysqli_fetch_array($s1))
{
?>
  <tr>
    <td data-th="Genre"style="width:500px"><?php echo $row[0];?></td>
    <td data-th="Genre"style="width:500px"><?php echo $row[1];?></td>
	<td data-th="Genre"style="width:500px"><?php echo $row[2];?></td>
    <td data-th="Genre"style="width:500px"><?php echo $row[3]?></td>
</tr>
<?php
}
?>
 
</table></FORM>
</div>
</div>
        </div>
      </div>
    </div>
          
<div class="col-lg-12 col-md-0 mt-0 mt-md-0"><div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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