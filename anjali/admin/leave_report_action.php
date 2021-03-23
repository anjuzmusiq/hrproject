<?php 
include("header.php");
include 'connect.php';
$month=$_POST['month'];
$year=$_POST['year'];
if($month==1)
	$v_month='January';
else if($month==2)
	$v_month='February';
else if($month==3)
	$v_month='March';
else if($month==4)
	$v_month='April';
else if($month==5)
	$v_month='May';
else if($month==6)
	$v_month='June';
else if($month==7)
	$v_month='July';
else if($month==8)
	$v_month='August';
else if($month==9)
	$v_month='September';
else if($month==10)
	$v_month='October';
else if($month==11)
	$v_month='November';
else
	$v_month='December';
?>  

    <div class="hero-wrap" style="background-image: url('images/leave1.jpg');" data-stellar-background-ratio="0.4	">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-lg-0 col-md-0 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          </div>
          <div class="col-lg-0 col"></div>
	   <div class="col-lg-12 col-md-0 mt-0 mt-md-0">
	   <center>
	   <form method="POST" action="salary_action.php" class="request-form ftco-animate">
          		<h2>LEAVE REPORT <?php echo $v_month," ",$year;?></h2>
<table class="rwd-table" border="1">
			<th style="width:550px">EMP_ID</th>
			<th style="width:500px">FIRST NAME</th>
			<th style="width:550px">LAST NAME</th>
			<th style="width:550px">EMAIL</th>
			<th style="width:550px">NO OF LEAVES</th>
			<th style="width:550px">DEPARTMENT</th>
			<th style="width:550px">DESIGNATION</th>

			

			
		  </tr>
<?php
$sql1="SELECT * FROM salary,employee WHERE year='$year' AND month='$month' and salary.emp_id=employee.emp_id";
$s1=mysqli_query($con,$sql1);
while($row=mysqli_fetch_array($s1))
{	

?>
<tr>
		    <td data-th="Genre"style="width:550px"><?php echo $row[1];?></td>
			<td data-th="Movie Title"style="width:500px"><?php echo $row[12];?></td>
			<td data-th="Movie Title"style="width:500px"><?php echo $row[13];?></td>
			<td data-th="Movie Title"style="width:500px"><?php echo $row[17];?></td>
			<td data-th="Movie Title"style="width:500px"><?php echo $row[5];?></td>
			<td data-th="Movie Title"style="width:500px"><?php echo $row[15];?></td>
			<td data-th="Movie Title"style="width:500px"><?php echo $row[16];?></td>


			
</tr>
<?php
}
?>
	 </table>
	 </center>
		</form>		
		
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