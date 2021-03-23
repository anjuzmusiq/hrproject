<?php 
include("header.php");
include 'connect.php';
$email=$_POST['email'];
$month=$_POST['month'];
$year=$_POST['year'];
$sql1="SELECT emp_id from employee where email='$email'";
$result=mysqli_query($con,$sql1);
if($row=mysqli_fetch_array($result))
{
	$emp_id=$row[0];
}
else
{?>
				<script>
				window.location='salary_slip.php';
				alert('invalid employee');
				</script>
				<?php
}
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
$sql2="select * from salary where emp_id='$emp_id'and month='$month'and year='$year'";
$result1=mysqli_query($con,$sql2);
if($data1=mysqli_fetch_array($result1))
{
	
	$salary=$data1[4];
	$no_leave=$data1[5];
	$da=$data1[6];
	$pf=$data1[7];
	$hra=$data1[8];
	$net_pay=$data1[9];
	$sal_status=$data1[10];

}
else
{
	$salary='Not Issued';
	$no_leave='Not Issued';
	$da='Not Issued';
	$pf='Not Issued';
	$hra='Not Issued';
	$net_pay='Not Issued';
	$sal_status='Not Issued';
}
?> 
<style>
.color-box
{
width:400px;
height:50px;
background-color:#AEEBF1;
}
</style>
<div class="hero-wrap" style="background-image: url('images/admin1.jpg');" data-stellar-background-ratio="0.8">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-lg-0 col-md-0 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          </div>
          <div class="col-lg-0 col"></div>
          <div class="col-lg-12 col-md-0 mt-0 mt-md-0">
		   <div class="color-box"> 
		 <center>
			  <h2>SALARY SLIP <?php echo $v_month;?><?php echo $year;?></h2>
			</div><br>
		<table class="rwd-table" border="1">
  
  <tr>
    <th data-th="Movie Title" style="width:500px">EMPLOYEE ID</th>
    <td data-th="Genre"style="width:500px"><?php echo $emp_id;?></td>
  </tr>
  <tr>
    <th data-th="Movie Title" style="width:500px">EMAIL</th>
    <td data-th="Genre"style="width:500px"><?php echo $email;?></td>
  </tr>
  <tr>
    <th data-th="Movie Title" style="width:500px">MONTH</th>
    <td data-th="Genre"style="width:500px"><?php echo $v_month;?></td>
  </tr>
  <tr>
    <th data-th="Movie Title" style="width:500px">YEAR</th>
    <td data-th="Genre"style="width:500px"><?php echo $year;?></td>
  </tr>
  <tr>
    <th data-th="Movie Title">NO OF LEAVES</th>
    <td data-th="Genre"><?php echo $no_leave;?></td>
  </tr>
  <tr>
    <th data-th="Movie Title">HRA</th>
    <td data-th="Genre"><?php echo $hra;?></td>
  </tr>
  <tr>
   <th data-th="Movie Title">PF</th>
    <td data-th="Genre"><?php echo $pf;?></td>
  </tr>
  <tr>
   <th data-th="Movie Title">DA</th>
    <td data-th="Genre"><?php echo $da;?></td>
  </tr>
  <tr>
   <th data-th="Movie Title">BASIC_SALARY</th>
    <td data-th="Genre"><?php echo $salary;?></td>
  </tr>
  <tr>
   <th data-th="Movie Title">NET PAY</th>
    <td data-th="Genre"><?php echo $net_pay;?></td>
  </tr>
   </tr>
  <tr>
   <th data-th="Movie Title">SALARY STATUS</th>
    <td data-th="Genre"><?php echo $sal_status;?></td>
  </tr>
</table></center>
		  
		  
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
         </div>
        </div>
      </div>
    </div>
  </body>
</html>