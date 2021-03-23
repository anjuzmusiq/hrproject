<?php 
include("header.php");
include("connect.php");
$sql1="select count(l_id) FROM leaves where l_status='applied'";
$result=mysqli_query($con,$sql1);
while($p=mysqli_fetch_array($result))
{$pending=$p[0];}
$sql2="SELECT count(application_no) FROM `application` WHERE status='open'";
$result1=mysqli_query($con,$sql2);
while($a=mysqli_fetch_array($result1))
{$applied=$a[0];}
?>    
  <div class="hero-wrap" style="background-image: url('images/index1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<form method="POST" action="leave.php" class="request-form ftco-animate">
			  			 <h1> Pending leave approval:<?php echo $pending;?></h1>
			  <div class="form-group">
	              <input type="submit" value="Click here" class="btn btn-primary py-6 px-6">
	          </div>
			</form>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<form method="POST" action="applicant.php" class="request-form ftco-animate">
			  			 <h1>No of applicants applied:<?php echo $applied;?></h1>
			  <div class="form-group">
	              <input type="submit" value="View Details" class="btn btn-primary py-6 px-6">
	          </div>
			</form>
          <div class="col-lg-0 col-md-0 mt-0 mt-md-0">
		  <div class="ftco-schedule">
			<div class="row">
            <div class="col-md-3 nav-link-wrap text-center text-md-right">
	            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
	              <a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">HR Admin</a>

	              <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Responsibilities </a>

	              <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Job Brief </a>
				  <a class="nav-link ftco-animate" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Modules </a>
	            </div>
	          </div>
			 
				  <div class="col-md-9 tab-wrap">
	            
	            <div class="tab-content" id="v-pills-tabContent">

	              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
	              	<div class="speaker-wrap ftco-animate d-md-flex">
	              		<div class="img speaker-img" style="background-image: url(images/day1.jpg);"></div>
	              		<div class="text">
	              			<h2><a href="#">HR Administrator </a></h2>
	              			<p>HR Administrators have both management and administrative responsibilities within an organization. They are usually the first point of contact for all HR-related matters and often deal with internal and external parties. Duties may include maintaining records, preparing documents, and ensuring employees receive adequate support.</p>
	              		</div>
	              	</div>
	              </div>

	              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
	              	<div class="speaker-wrap ftco-animate d-md-flex">
	              		<div class="img speaker-img" style="background-image: url(images/day1.jpg);"></div>
	              		<div class="text">
	              			<h2><a href="#">Responsibilities</a></h2>
	              			<p><ul>
							<li>Organize and maintain personnel records</li>
							<li>Update internal databases (e.g.leaves)</li>
							<li>Prepare HR reports like department,salary,leave reports</li>
							<li>Revise company policies</li>
							<li>Answer employees queries about grivience</li>
							<li>Assist payroll department by providing relevant employee information (e.g. leaves of absence)</li>
							</ul></p>
	              		</div>
	              	</div>
	              	
	              </div>
	              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
	              <div class="speaker-wrap ftco-animate d-md-flex">
	              		<div class="img speaker-img" style="background-image: url(images/day1.jpg);"></div>
	              		<div class="text">
	              			<h2><a href="#">Job brief</a></h2>
	              			<p>We are looking for an HR Administrator to support our Human Resources department. You will act as the first point of contact for HR-related queries from employees and external partners.

Your main administrative duties include maintaining personnel records, managing HR documents (e.g. employment records and onboarding guides) and updating internal databases. Our ideal candidate has experience with HR procedures and can juggle various administrative tasks in a timely manner.

Ultimately, you should be able to ensure our HR department supports our employees while conforming to labor laws.</p>
	              		</div>
	              	</div>
						</div>
						<div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-day-4-tab">
	              <div class="speaker-wrap ftco-animate d-md-flex">
	              		<div class="img speaker-img" style="background-image: url(images/day1.jpg);"></div>
	              		<div class="text">
	              			<h2><a href="#">Modules</a></h2>
	              			<p><ul>
							<li>Salary</li>
							<li>Employee</li>
							<li>Vacancy</li>
							<li>Reports</li>
							</ul></p>
	              		</div>
	              	</div>
						</div>
	              	</div>
	              </div>
	            </div>
	          </div>
          </div>
        </div>
      </div>
	  		<section class="ftco-section services-section bg-primary">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-guest"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Employess</h3>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-world"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Global</h3>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-idea"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Ideas</h3>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-handshake"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Community</h3>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>
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