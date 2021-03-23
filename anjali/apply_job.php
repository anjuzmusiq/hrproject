<?php 
include("header.php");
?>  
		<body style="background-color:#AEEBF1">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-lg-0 col-md-0 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          </div>
          <div class="col-lg-0 col"></div>
          <div class="col-lg-12 col-md-0 mt-0 mt-md-0">
<br>
<br>
<br>
          	<form method="POST" action="job_action.php" class="request-form ftco-animate">
          		<h2>APPLICATION</h2>
	    				<div class="form-group">
	    					<input type="text" class="form-control" name="f_name" placeholder="Enter your first name">
	    				</div>
						<div class="form-group">
	    					<input type="text" class="form-control" name="l_name" placeholder="Enter your last name">
	    				</div>
						<div class="form-group">
							<label>Gender</label>
							<select class="form-control" name="gender">
							<option value="male">Male</option>
							<option value="female">Female</option>
							</select>
	    				</div>
						<?php
						$department=$_GET['id1'];
						$designation=$_GET['id2'];?>
						<input name="department"type="hidden" value="<?php echo $department;?>">
						<input name="designation"type="hidden" value="<?php echo $designation;?>">
						<div class="form-group">
							<label>Nationality</label>
							<select class="form-control" name="nationality">
							<option value="indian">INDIAN</option>
							<option value="iranian">IRANIAN</option>
							<option value="iranian">FRENCH</option>
							<option value="german">GERMAN</option>
							</select>
	    				</div>
						<div class="form-group">
							<label>Marital Status</label>
							<select class="form-control" name="marital_status">
							<option value="manager">Single</option>
							<option value="asst manager">Married</option>
							</select>
	    				</div>
						<div class="form-group">
							<input type="email" class="form-control" name="email" placeholder="Enter your Email">
	    				</div>
						<div class="form-group">
	    					<textarea cols="180" rows="3" class="form-control" name="address" placeholder="Enter your Address"></textarea>
	    				</div>
	    				<div class="form-group">
						<label>Mobile</label>
						<input  type="text"name="mobile" type="tel" pattern="^\d{10}$" required >
						<div class="form-group">
						<label>Date of Application</label>
	    					<input type="date" class="form-control" name="date_of_apply" placeholder="Enter Joining date">
	    				</div>
						<div class="form-group">
						<label>Date of birth</label>
	    					<input type="date" class="form-control" name='dob' placeholder="Enter date of birth">
	    				</div>
						*Please carry resume in the walk in interview<br>
						*Result will be published after 3 days of interview<br><br>
	            <div class="form-group">
	              <input type="submit" value="APPLY" class="btn btn-primary py-3 px-4">
	            </div>
	    	</form>
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