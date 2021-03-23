<html>
<head></head>
<body>
<?php 
include("header.php");
session_start();
include 'connect.php';
$email=$_POST['email'];
$subject=$_POST['subject'];
$detail=$_POST['detail'];
$sql2="INSERT INTO complaint(email,subject,detail) values ('$email','$subject','$detail')";
    $result1=mysqli_query($con,$sql2);
	if($result1==TRUE)
	{
		echo"<script>
		alert('Grievance succesfully sent');
		window.location='complaint.php';
		</script>";
	}
	else
	{
		echo"<script>
		alert('Error in sending');
		window.location='complaint.php';
		</script>";
	}

?>
</body>
</html>



