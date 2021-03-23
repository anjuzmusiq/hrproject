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
<div class="hero-wrap" style="background-image: url('images/admin1.jpg');" data-stellar-background-ratio="0.8	">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-lg-0 col-md-0 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          </div>
          <div class="col-lg-0 col"></div>
          <div class="col-lg-12 col-md-0 mt-0 mt-md-0"><br><br>
		  <form method="POST" action="salary_action.php" class="request-form ftco-animate">
          		<h2>SALARY ISSUE <?php echo $v_month," ",$year;?></h2>
				<table class="rwd-table" border="1">
			<th style="width:250px">EMPLOYEE ID</th>
			<th style="width:250px">FIRST NAME</th>
			<th style="width:250px">LAST NAME</th>
			<th style="width:250px">DEPARTMENT</th>
			<th style="width:250px">DESIGNATION</th>
			<th style="width:250px">NO OF LEAVES</th>
			<th style="width:250px">HRA</th>
			<th style="width:250px">PF</th>
			<th style="width:250px">DA</th>
			<th style="width:250px">BASIC SALARY</th>
			<th style="width:250px">NET PAY</th>

		  </tr>
<?php
$s="select emp_id,f_name,l_name,department,designation,email from employee where emp_status='working' order by department";
$result=mysqli_query($con,$s);
while($d=mysqli_fetch_array($result))
{
	$emp_id=$d[0];
	$f_name=$d[1];
	$l_name=$d[2];
    $department=$d[3];
	$designation=$d[4];
	$email=$d[5];

$sql1="select sum(days),email from leaves where month(from_date)='$month' and month(to_date)='$month'  AND YEAR(from_date) ='$year' AND YEAR(to_date)='$year' and l_status='approved'  and email='$email' group by email";
$result1=mysqli_query($con,$sql1);
if($data=mysqli_fetch_array($result1))
{
	$leave=$data[0];
	$email=$data[1];
}
else
{
	$leave=0;
}
$month=$_POST['month'];
$year=$_POST['year'];
$sql2="select salary,email from employee where emp_id='$emp_id'";
$result2=mysqli_query($con,$sql2);
if($data1=mysqli_fetch_array($result2))
{
	$salary=$data1[0];
	$email=$data1[1];
}
if($leave>3)
{
	$no=$leave-3;
	$salary=$salary-($no*150);
}
$hra=(50/100)*$salary;
$da=(20/100)*$salary;
$pf=(7/100)*$salary;
$net_pay=$salary+$hra+$da-$pf;

$sql4="select * from salary where month='$month' and year='$year'";
$result4=mysqli_query($con,$sql4);
if($result4!=TRUE)
{
				?>
				<script>
				alert("salary already issued");
				window.location='salary.php';
				</script>
				<?php
}
else
{
$sql3="INSERT INTO salary(emp_id,month,year,salary,no_leave,da,pf,hra,net_pay,sal_status)values('$emp_id','$month','$year','$salary','$leave','$da','$pf','$hra','$net_pay','issued')";
$result3=mysqli_query($con,$sql3);
?>
  <tr>
    <td data-th="Movie Title"><?php echo $emp_id;?></td>
    <td data-th="Genre"><?php echo $f_name;?></td>
    <td data-th="Year"><?php echo $l_name;?></td>
    <td data-th="Year"><?php echo $department;?></td>
    <td data-th="Year"><?php echo $designation;?></td>
    <td data-th="Year"><?php echo $leave;?></td>
    <td data-th="Year"><?php echo $hra;?></td>
    <td data-th="Year"><?php echo $pf;?></td>
	<td data-th="Year"><?php echo $da;?></td>
    <td data-th="Gross"><?php echo $salary;?></td>
	<td data-th="Gross"><?php echo $net_pay;?></td>
  </tr>
<?php
}}
?>
</table><br></form>
					
		  
		  
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

		  
		  
