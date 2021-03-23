<html>
<head></head>
<body>
<?php
session_start();
include 'connect.php';
$f_name=$_POST['f_name'];
$l_name=$_POST['l_name'];
$gender=$_POST['gender'];
$dep=$_POST['department'];
$des=$_POST['designation'];
$nationality=$_POST['nationality'];
$marital_status=$_POST['marital_status'];
$email=$_POST['email'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$date_of_apply=$_POST['date_of_apply'];
$dob=$_POST['dob'];
if($dep==1)
	$department="accounts and finance";
else if($dep==2)
	$department="sales and marketing";
else if($dep==3)
	$department="product development";
if($des==1)
	$designation="manager";
else if($des==2)
	$designation="asst manager";
else if($des==3)
	$designation="team leader";
$sql5="INSERT INTO application(f_name,l_name,gender,department,designation,nationality,marital_status,email,address,mobile,date_of_apply,dob,application_status,status) values ('$f_name','$l_name','$gender','$department','$designation','$nationality','$marital_status','$email','$address','$mobile','$date_of_apply','$dob','applied','open')";
$result5=mysqli_query($con,$sql5);
if($result5==TRUE)
{
echo"<script>
window.location='vacancy.php';
alert('Applied Successfuly');
</script>";
}
else
{
echo"<script>alert('Error in applying');
window.location='vacancy.php';
</script>";
}


?>
</body>
</html>
