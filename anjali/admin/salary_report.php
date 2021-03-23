<?php
include("header.php");
?>  
     <div class="hero-wrap" style="background-image: url('images/info.jpg');" data-stellar-background-ratio="0.8 ">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-lg-0 col-md-0 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          </div>
          <div class="col-lg-0 col"></div>
          <div class="col-lg-12 col-md-0 mt-0 mt-md-0">
				 <form method="POST" action="salary_report_action.php" class="request-form ftco-animate">
						  <h2>SALARY REPORT</h2>
				   
				<div class="form-group">
					<input type="text" class="form-control" name="year" placeholder="ENTER YEAR" id="demo"required>
					</div>
				<div class="form-group">
				<label>ENTER MONTH</label>
				<select class="form-control" name="month" id="mt" onchange="myFunction()">
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
				<p hidden id="msd1">
				<p hidden id="msd2">
				<p hidden id="msd3">
				<p hidden id="msd4">
				<script>
				var d = new Date();
				var errorMsg = "";

				function myFunction() {
				document.getElementById("msd1").innerHTML=document.getElementById("demo").value;
				document.getElementById("msd2").innerHTML=d.getFullYear();
				document.getElementById("msd3").innerHTML=document.getElementById("mt").value;
				document.getElementById("msd4").innerHTML=d.getMonth()+1;
				  if(document.getElementById("demo").value<=d.getFullYear())
				  {
				 if(document.getElementById("demo").value==d.getFullYear())
				 {
				 if(document.getElementById("mt").value>d.getMonth()+1)
				 {
				  errorMsg = "Invalid month";
				 alert(errorMsg);
				 }
				 }
				  }
				 else
				 {
				   errorMsg = "Invalid date";
				 alert(errorMsg);
				 }
				 
				  }
				 			 
				</script>
        </div>
<div>
<input type="submit" value="DETAILS" class="btn btn-primary py-3 px-4">
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
    </div>
  </body>
</html>