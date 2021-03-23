<?php 
include("header.php");
session_start();
include 'connect.php';
?> 
<style>
.color-box
{
width:550px;
height:50px;
background-color:black;
}
</style>

	
    <div class="hero-wrap" style="background-image: url('images/vacancy1.jpg');" data-stellar-background-ratio="0.4	">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-lg-0 col-md-0 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          </div>
          <div class="col-lg-0 col"></div>
	   <div class="col-lg-12 col-md-0 mt-0 mt-md-0">
	   <br><br>
	   <center>
			<div class="color-box"> 
			<font color="white">
			  <h2 style="color:white">VACANCIES AVAILABLE</h2>
			  <p style="color:white"></p>
			  </font>
			</div>
<table>
  <thead>
    <tr>
      <th>DEPARTMENT</th>
      <th>DESIGNATION</th>
      <th>VACANCY</th>
      <th>LAST DATE</th>

	  <th></th>
	  </tr>
  </thead>
<?php
$sql1="SELECT * from department,designation,dd where dd.dept_id=department.dept_id and dd.desig_id=designation.desig_id and dd.vacancy_status='available'";
$s1=mysqli_query($con,$sql1);
while(($row=mysqli_fetch_array($s1))==TRUE)
{
?>
  <tbody>
    <tr>
      <td><?php echo $row[1];?></td>
      <td><?php echo $row[3];?></td>
      <td><?php echo $row[7];?></td>
	  <td><?php echo $row[8];?></td>
	  <td><a href="apply_job.php?id1=<?php echo $row[0];?>&id2=<?php echo $row[2];?>">APPLY</a></td>
	  </tr>
	 </tbody>
<?php
}
?>
	 </table>
	 </center>
				
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