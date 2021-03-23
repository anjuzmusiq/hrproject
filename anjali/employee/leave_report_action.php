<?php 
include("header.php");
include 'connect.php';
session_start();
$email=$_SESSION['email'];
$month=$_POST['month'];
$year=$_POST['year'];
$sql1="SELECT * FROM salary,employee WHERE year='$year' AND month='$month' and email='$email' and salary.emp_id=employee.emp_id";
$s1=mysqli_query($con,$sql1);
if($row=mysqli_fetch_array($s1))
{
	$emp_id=$row[1];
	$f_name=$row[12];
	$l_name=$row[13];
	$no_of_days=$row[5];
if($month=='1')
	$v_month='january';
else if($month=='2')
	$v_month='february';
else if($month=='3')
	$v_month='march';
else if($month=='4')
	$v_month='april';
else if($month=='5')
	$v_month='may';
else if($month=='6')
	$v_month='june';
else if($month=='7')
	$v_month='july';
else if($month=='8')
	$v_month='august';
else if($month=='9')
	$v_month='september';
else if($month=='10')
	$v_month='october';
else if($month=='11')
	$v_month='november';
else 
	$v_month='december';
}
else
{
				?>
				<script>
				window.location='leave_report.php';
					alert("leaves not taken");
				</script>
				<?php
}

?>
<style>
.color-box
{
width:540px;
height:50px;
background-color:#AEEBF1;
}
</style>
    <div class="hero-wrap" style="background-image: url('images/index1.jpg');" data-stellar-background-ratio="0.">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-lg-0 col-md-0 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          </div>
          <div class="col-lg-0 col"></div>
	   <div class="col-lg-12 col-md-0 mt-0 mt-md-0">
	   
			<div class="color-box"> 
		 <center>
			  <h2>LEAVE REPORT-<?php echo $v_month;?></h2>
			</div><br>
<table class="rwd-table" border="1">
<tr>
			<th style="width:550px">EMP_ID</th>
		    <td data-th="Genre"style="width:550px"><?php echo $emp_id;?></td>
</tr>
<tr>
			<th style="width:550px">FIRST NAME</th>
			<td data-th="Movie Title"style="width:550px"><?php echo $f_name;?></td>
</tr>			
<tr>
			<th style="width:550px">LAST NAME</th>
			<td data-th="Movie Title"style="width:550px"><?php echo $l_name;?></td>
</tr>
<tr>
			<th style="width:550px">NO OF LEAVES</th>
			<td data-th="Movie Title"style="width:550px"><?php echo $no_of_days;?></td>
</tr>
<tr>
			<th style="width:550px">MONTH</th>
			<td data-th="Movie Title"style="width:550px"><?php echo $v_month;?></td>
</tr>
<tr>
			<th style="width:550px">YEAR</th>
			<td data-th="Movie Title"style="width:550px"><?php echo $year;?></td>
</tr>


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