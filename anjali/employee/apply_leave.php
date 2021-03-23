<?php 
session_start();
include("header.php");
$email=$_SESSION['email'];
?>    
    <div class="hero-wrap" style="background-image: url('images/black1.jpg');" data-stellar-background-ratio="0.8	">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-lg-0 col-md-0 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          </div>
          <div class="col-lg-0 col"></div>
          <div class="col-lg-12 col-md-0 mt-0 mt-md-0">
		  	<form method="POST" action="apply_leave_action.php" class="request-form ftco-animate">
          	<h2>LEAVE APPLICATION</h2>
						<div class="form-group">
	    					<input type="email" required class="form-control" value="<?php echo $email; ?>" name="email" placeholder="Enter email">
	    				</div>
						<div class="form-group">
	    					<input type="text" required class="form-control" name="reason" placeholder="Enter reason">
	    				</div>
						<div class="form-group">
	    					<label>FROM DATE</label>
							<input type="date" required class="form-control" name="from_date"id="from" onchange="return  present()">
	    				</div>
						<div class="form-group">
						<label>TO DATE</label>
						<input type="date" required class="form-control" name="to_date" id="to" onchange="return validate()">
						</div>

<p id="from"></p>
<p id="to"></p>
<script>
function present()
{
var date = document.getElementById("from").value;
var varDate = new Date(date); //dd-mm-YYYY
var today = new Date();
if(varDate <= today) {
alert("invalid date for applying leave");
}}
</script>

<script>
var from_date = new Date();
 var to_date = new Date();
 function validate() 
 {
  from_date=document.getElementById("from").value;
  to_date=document.getElementById("to").value;
  var from_month=from_date.getMonth()+1;
  var to_month=to_date.getMonth()+1;
  alert(from_month);
  if(from_month!=to_month)
  {	
	alert("from_month");
  }
 }
 
</script>
						<div class="form-group">
	               <input type="submit" value="SUBMIT" class="btn btn-primary py-3 px-4">
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
         </div>
        </div>
      </div>
    </div>
  </body>
</html>