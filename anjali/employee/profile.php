<?php
include("header.php");
session_start();
include 'connect.php';
$email=$_SESSION['email'];
$s="select * from employee where email='$email'";                
$s1=mysqli_query($con,$s);
while($row=mysqli_fetch_array($s1))
{
$emp_id=$row[0];
$f_name=$row[1];
$l_name=$row[2];
$gender=$row[3];
$department=$row[4];
$designation=$row[5];
$email=$row[6];
$address=$row[7];
$mobile=$row[8];
$salary=$row[9];
$join_date=$row[10];
$dob=$row[11];
$password=$row[12];
$c_password=$row[13];
$status=$row[14];
}
?>

<body style="background-color:#AEEBF1">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-lg-0 col-md-0 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          </div>
          <div class="col-lg-0 col"></div>
          <div class="col-lg-12 col-md-0 mt-0 mt-md-0">
		  <BR><BR><BR><br>
		  		<form method="POST" action="update_action.php" >
		 <center> <table class="rwd-table" border="1">
  <tr style="height:50px">
    <th data-th="Movie Title" style="width:300px" colspan="2"><center>MY PROFILE</center</th>
</td>
  </tr>
  <tr>
    <th data-th="Movie Title" style="width:300px">EMPLOYEE ID</th>
    <td><?php echo $emp_id;?>
</td>
  </tr>
  <tr>
    <th data-th="Movie Title" style="width:300px">FIRST NAME</th>
    <td data-th="Genre"style="width:500px"><input type="text" class="form-control" name="f_name" value="<?php echo $f_name;?>" placeholder="Enter your first name">
</td>
  </tr>
  <tr>
    <th data-th="Movie Title" style="width:300px">LAST NAME</th>
    <td data-th="Genre"style="width:500px"><input type="text" class="form-control" name="l_name"value="<?php echo $l_name;?>" placeholder="Enter your last name">
</td>
  </tr>
  <tr>
    <th data-th="Movie Title" style="width:300px">GENDER</th>
    <td data-th="Genre"style="width:500px"><select class="form-control" name="gender" value="<?php echo $gender;?>"selected>
							<option selected="selected"><?php echo $gender;?></option>
							<option value="male">Male</option>
							<option value="female">Female</option>
							</select></td>
  </tr>
  <tr>
    <th data-th="Movie Title" style="width:300px">DEPARTMENT</th>
    <td data-th="Genre"style="width:500px"><?php echo $department;?></td>
  </tr>
  <tr>
    <th data-th="Movie Title" style="width:300px">DESIGNATION</th>
    <td data-th="Genre"style="width:500px"><?php echo $designation;?></td>
  </tr>
  <tr>
    <th data-th="Movie Title" style="width:300px">EMAIL</th>
    <td data-th="Genre"style="width:500px"><input type="text" class="form-control" name="email" value="<?php echo $email;?>" placeholder="Enter your Email"></td>
  </tr>
  <tr>
    <th data-th="Movie Title" style="width:300px">ADDRESS</th>
    <td data-th="Genre"style="width:500px"><textarea cols="200" rows="3"  class="form-control" name="address" ><?php echo $address;?> </textarea>
</td>
  </tr>
  <tr>
    <th data-th="Movie Title">MOBILE</th>
    <td data-th="Genre"><input name="mobile" type="tel" value="<?php echo $mobile;?>"pattern="^\d{10}$" required ></td>
  </tr>
  <tr>
    <th data-th="Movie Title">SALARY</th>
    <td data-th="Genre"><?php echo $salary;?>
</td>
  </tr>
  <tr>
   <th data-th="Movie Title">JOINING DATE</th>
    <td data-th="Genre"><?php echo $join_date;?>
</td>
  </tr>
  <tr>
   <th data-th="Movie Title">DATE OF BIRTH</th>
    <td data-th="Genre"><input type="date" class="form-control" name='dob'value="<?php echo $dob;?>" placeholder="Enter date of birth">
</td>
  </tr>
  <tr>
   <th data-th="Movie Title">PASSWORD</th>
    <td data-th="Genre"><input type="password" class="form-control" value="<?php echo $password;?>"name="password" placeholder="Enter Password">
</td>
  </tr>
  <tr>
   <th data-th="Movie Title">CONFIRM PASSWORD</th>
    <td data-th="Genre"><input type="password" class="form-control" value="<?php echo $c_password;?>" name="c_password" placeholder="Confirm Password">
</td>
  </tr>
</table>
	            <div class="form-group">
	              <input type="submit" value="UPDATE" class="btn btn-primary py-3 px-4">
				  </div>
				  </form></center>
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