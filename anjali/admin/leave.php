<?php 
include("header.php");
include 'connect.php';
?> 
 <div class="hero-wrap" style="background-image: url('images/department1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-lg-1 col-md-1 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          </div>
          <div class="col-lg-0 col"></div>
          <div class="col-lg-12 col-md-0 mt-0 mt-md-0"><br><br>
		  <div align="left">
		  <form method="POST" action="salary_action.php" class="request-form ftco-animate">
          		<h2>LEAVE APPLICATIONS</h2>
		   	<table class="rwd-table" border="1">
			<th style="width:550px">LEAVE_ID</th>
			<th style="width:550px">EMAIL</th>
			<th style="width:550px">REASON</th>
			<th style="width:550px">DAYS</th>
			<th style="width:550px">FROM_DATE</th>
			<th style="width:5000px">TO_DATE</th>
			<th style="width:550px">STATUS</th>
		  </tr>
<?php
$s="select * from leaves where l_status='applied'";               
$s1=mysqli_query($con,$s);
while($row=mysqli_fetch_array($s1))
{
?>

		  <tr>
		    <td data-th="Genre"style="width:550px"><?php echo $row[0];?></td>
			<td data-th="Movie Title"style="width:550px"><?php echo $row[1];?></td>
			<td data-th="Genre"style="width:550px"><?php echo $row[2];?></td>
			<td data-th="Year"style="width:550px"><?php echo $row[3];?></td>
			<td data-th="Gross"style="width:550px"><?php echo $row[4];?></td>
			<td data-th="Gross"style="width:5000px"><?php echo $row[5];?></td>
			<td data-th="Gross"style="width:5px"><?php echo $row[6];?></td>
			<td data-th="Gross"style="width:550px"><h4><U><A href='leave_approve.php?id=<?php echo $row[0];?>'><font color="white">"APPROVE</td></U></h4>
			<td data-th="Gross"style="width:550px"><h4><u><A href='leave_decline.php?id=<?php echo $row[0]?>'><font color="white">DECLINE</td></u></h4>
<?php
}
?>		
		</tr>
		  </form>
			</table>
			 </div>
			 
      </div>
    </div>
</div>  

		  
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