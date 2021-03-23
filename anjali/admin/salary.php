<?php
include("header.php");
include 'connect.php';
?>  
    <div class="hero-wrap" style="background-image: url('images/admin1.jpg');" data-stellar-background-ratio="0.8 ">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-lg-0 col-md-0 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          </div>
          <div class="col-lg-0 col"></div>
          <div class="col-lg-12 col-md-0 mt-0 mt-md-0"><br><br>
 <form method="POST" action="salary_action.php" class="request-form ftco-animate">
          <h2>SALARY ISSUE</h2>
<table class="rwd-table" border="1">
<tr>
<th style="width:250px">EMPLOYEE ID</th>
<th style="width:250px">FIRST NAME</th>
<th style="width:250px">LAST NAME</th>
<th style="width:250px">DEPARTMENT</th>
<th style="width:250px">DESIGNATION</th>
<th style="width:250px">BASIC SALARY</th>
<th style="width:250px">EMAIL</th>
 </tr>
<?php
$s="select * from employee where emp_status='working' order by department";                
$s1=mysqli_query($con,$s);
while($row=mysqli_fetch_array($s1))
{
$emp_id=$row[0];
$f_name=$row[1];
$l_name=$row[2];
$department=$row[4];
$designation=$row[5];
$gender=$row[3];
$email=$row[6];
$salary=$row[9];
?>
  <tr>
    <td data-th="Movie Title"><?php echo $emp_id;?></td>
    <td data-th="Genre"><?php echo $f_name;?></td>
    <td data-th="Year"><?php echo $l_name;?></td>
    <td data-th="Year"><?php echo $department;?></td>
    <td data-th="Year"><?php echo $designation;?></td>
    <td data-th="Gross"><?php echo $salary;?></td>
<td data-th="Gross"><?php echo $email;?></td>
  </tr>
  <?php
  }
?>
</table><br>
<div class="form-group">
<label>ENTER MONTH</label>
<select class="form-control" onchange="myMonth()" id="mont" name="month">
<option value="1">JANUARY</option>
<option value="2">FEBRUARY</option>
<option value="3">MARCH</option>
<option value="4">APRIL</option>
<option value="5">MAY</option>
<option value="6">JUNE</option>
<option value="7">JULY</option>
<option value="8">AUGUST</option>
<option value="9">SEPTEMBER</option>
<option value="10">OCTOBER</option>
<option value="11">NOVEMBER</option>
<option value="12">DECEMBER</option>
</select>
<p id="mnth"></p>
<p id="mnth1"></p>
<script>
var m = new Date();
var errorMsg = "";
var month = m.getMonth();
 
 function myMonth() {
 if(document.getElementById("mont").value!=m.getMonth()+1) {
            errorMsg = "Invalid value";
alert(errorMsg);
 }
 }
</script>
        </div>
<div class="form-group">
    <input type="text" class="form-control" placeholder="ENTER YEAR" onchange="myFunction()" name="year" id="demo">
<p id="msd"></p>

<script>
var d = new Date();
var errorMsg = "";
var year = d.getFullYear();
 var regs = document.getElementById("demo").value;
 function myFunction() {
 if(document.getElementById("demo").value!=d.getFullYear()) {
            errorMsg = "Invalid value";
  alert(errorMsg);
          }

 }
</script>
    </div>




<div class="form-group">
<input type="submit" value="CALCULATE SALARY" class="btn btn-primary py-3 px-4">
</div>
  </form>
 
 
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
  </body>
</html>