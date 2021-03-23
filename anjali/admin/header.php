<!DOCTYPE html>
<html lang="en">
  <head>
    <title>HUMAN RESOURCE MANAGEMENT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  <style>
.rwd-table {
  background: #34495E;
  color: #fff;
  border-radius: .4em;
  overflow: hidden;
  tr {
    border-color: lighten(#34495E, 10%);
  }
  th, td {
    margin: .5em 1em;
    @media (min-width: $breakpoint-alpha) { 
      padding: 1em !important; 
    }
  }
  th, td:before {
    color: #dd5;
  }
}
/* demo page styles */
body {
    background:#eee;
    margin:0;
    padding:0;
    font-family: "Trebuchet MS",Arial,Helvetica,sans-serif;
}
.example {
    position:relative;
    width:1500px;
    height:500px;
    border:1px #000 solid;
    padding:15px;
    border-radius:3px;
    -moz-border-radius:3px;
    -webkit-border-radius:3px;
}
/* main menu styles */
.nav,.nav ul {
    list-style:none;
    margin:0;
    padding:0;
}
.nav {
    position:relative;
}
.nav ul {
    height:0;
    left:0;
    overflow:hidden;
    position:absolute;
    top:46px;
}
.nav li {
    float:left;
    position:relative;
}
.nav li a {
    -moz-transition:0.5s;
    -o-transition:0.5s;
    -webkit-transition:0.5s;
    background-color:#306EFF;
    border:1px solid #6E67A6;
    color:#FFF;
    display:block;
    font-size:18px;
    line-height:35px;
    padding:10px 30px;
    text-decoration:none;
    transition:0.5s;
}
.nav li:hover > a {
    background:#6CAAFF;
    border-color:#6E67A6;
    color:#fff;
}
.nav li:hover ul.subs {
    height:auto;
    width:250px;
}
.nav ul li {
    -moz-transition:0.5s;
    -o-transition:0.5s;
    -webkit-transition:0.5s;
    opacity:0;
    transition:0.5s;
    width:100%;
}
.nav li ul li {
    -moz-transition-delay:0s;
    -o-transition-delay:0s;
    -webkit-transition-delay:0s;
    transition-delay:0s;
}
.nav li:hover ul li {
    opacity:1;
    -moz-transition-delay:0.5s;
    -o-transition-delay:0.5s;
    -webkit-transition-delay:0.5s;
    transition-delay:0.5s;
}
.nav ul li a {
    background:#306EFF;
    border-color:#6E67A6;
    color:#fff;
    line-height:1px;
    -moz-transition:1.5s;
    -o-transition:1.5s;
    -webkit-transition:1.5s;
    transition:1.5s;
}
.nav li:hover ul li a {
    line-height:35px;
}
.nav ul li a:hover {
    background:#6CAAFF;
    background-image: -webkit-gradient(linear, 0% 0%, 0% 95%, from(rgba(255, 255, 255, 0.5)), to(rgba(255, 255, 255, 0)));
    background-image: -moz-linear-gradient(-90deg, rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0));
    background-image: -o-linear-gradient(-90deg,rgba(255,255,255,0.5),rgba(255,255,25,0));
}
</style>
<style>
.topnav {
  background-color: #0000A0	;
  color: #f2f2f2;
  padding: 55px;
  font-size: 17px;
}
</style>
</head>
  
  <body>
    <div class="topnav">
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	   	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<img src="images/p.png" style="width:60px;height:60px;"></img>
		<div class="container">
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="nav">
        <li><a href="index.php">ADMIN HOME</a></li>&nbsp;&nbsp;
        <li><a href="#">EMPLOYEE</a>
            <ul class="subs">
                <li><a href="addemploy.php">ADD EMPLOYEE</a></li>
                <li><a href="edit.php">EDIT EMPLOYEE</a></li>
                <li><a href="leave.php">LEAVE APPLICATION</a></li>
                <li><a href="complaint.php">GRIEVANCE</a></li>
            </ul>
        </li>&nbsp;&nbsp;
        <li><a href="#">SALARY</a>
            <ul class="subs">
                <li><a href="salary.php">SALARY ISSUE</a></li>  
				<li><a href="salary_slip.php">SALARY SLIP</a></li>  

            </ul>
        </li>&nbsp;&nbsp;
		<li><a href="#">REPORT</a>
            <ul class="subs">
                <li><a href="salary_report">SALARY REPORT</a></li>  
				<li><a href="department.php">DEPARTMENT REPORT</a></li>  
				<li><a href="leave_report.php">LEAVE REPORT</a></li>  


            </ul>
        </li>&nbsp;&nbsp;
		<li><a href="#">VACANCY</a>
            <ul class="subs">
                <li><a href="vacancy_add.php">ADD VACANCIES</a></li>  
                <li><a href="vacancy_delete.php">DELETE VACANCIES</a></li>  
			    <li><a href="applicant.php">CONSOLIDATED APPLICANT DETAILS</a></li>  
			    <li><a href="applicant_dept.php">APPLICANT DEPARTMENT WISE</a></li>  
                <li><a href="result.php">INTERVIEW RESULTS</a></li>  
            </ul>
        </li>&nbsp;&nbsp;
        <li><a href="policy.php">COMPANY POLICY</a></li>&nbsp;&nbsp;
        <li><a href="logout.php">LOGOUT</a></li>
    </ul>

			</div>
			</div>
		</div>
	  </nav>