<?php 
include("header.php");
include 'connect.php';
$department=$_POST['department'];
$designation=$_POST['designation'];
?>  
	<body style="background-color:#AEEBF1">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-lg-0 col-md-0 ftco-animate" data-scrollax=" properties: { translateY: '100%' }">
          </div>
<form method="POST"  class="request-form ftco-animate">
          		<h2><center>APPLICANTS FROM <?php echo "DEPARTMENT=",$department," ","DESIGNATION=",$designation;?></center</h2>
          <div class="col-lg-0 col"></div>
	   <div class="col-lg-12 col-md-0 mt-0 mt-md-0">
	 
	<div align="left"> 
	<table class="rwd-table" border="1">
  
  <tr>
    <th data-th="Movie Title" style="width:500px">APPLICATION NO</th>
	<th data-th="Movie Title" style="width:500px">FIRST_NAME</th>
	<th data-th="Movie Title" style="width:500px">LAST_NAME</th>
	<th data-th="Movie Title" style="width:500px">GENDER</th>
	<th data-th="Movie Title" style="width:500px">DEPARTMENT</th>
	<th data-th="Movie Title" style="width:500px">DESIGNATION</th>
	<th data-th="Movie Title" style="width:500px">NATIONALITY</th>
	<th data-th="Movie Title" style="width:500px">MARITAL STATUS</th>
	<th data-th="Movie Title" style="width:500px">EMAIL</th>
	<th data-th="Movie Title" style="width:500px">ADDRESS</th>
	<th data-th="Movie Title" style="width:500px">MOBILE</th>
	<th data-th="Movie Title" style="width:500px">DATE OF APPLY</th>
	<th data-th="Movie Title" style="width:500px">DOB</th>
	<th data-th="Movie Title" style="width:500px">APPLICATION STATUS</th>
    
  </tr>
  <?php
$sql1="SELECT * from application where department='$department' and designation='$designation' and status='open'";
$s1=mysqli_query($con,$sql1);
while($row=mysqli_fetch_array($s1))
{
?>
  <tr>
    <td data-th="Genre"style="width:500px"><?php echo $row[0];?></td>
    <td data-th="Genre"style="width:500px"><?php echo $row[1];?></td>
	<td data-th="Genre"style="width:500px"><?php echo $row[2];?></td>
    <td data-th="Genre"style="width:500px"><?php echo $row[3]?></td>
	<td data-th="Genre"style="width:500px"><?php echo $row[4];?></td>
    <td data-th="Genre"style="width:500px"><?php echo $row[5];?></td>
	<td data-th="Genre"style="width:500px"><?php echo $row[6];?></td>
    <td data-th="Genre"style="width:500px"><?php echo $row[7]?></td>
	<td data-th="Genre"style="width:500px"><?php echo $row[8];?></td>
    <td data-th="Genre"style="width:500px"><?php echo $row[9]?></td>
	<td data-th="Genre"style="width:500px"><?php echo $row[10];?></td>
    <td data-th="Genre"style="width:500px"><?php echo $row[11]?></td>
    <td data-th="Genre"style="width:500px"><?php echo $row[12]?></td>
    <td data-th="Genre"style="width:500px"><?php echo $row[13]?></td>
  </tr>
<?php
}
?>
 
</table></form>
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