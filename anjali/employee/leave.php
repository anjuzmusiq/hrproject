<html>
<head></head>
<body>
<?php
session_start();
include 'connect.php';
$reason=$_POST['reason'];
$days=$_POST['days'];
$from_date=$_POST['from_date'];
$to_date=$_POST['to_date'];
$email=$_SESSION['email'];

	$sql2="INSERT INTO leaves(email,reason,days,from_date,to_date,l_status) values ('$email','$reason','$days','$from_date','$to_date','applied')";
    $result1=mysqli_query($con,$sql2);
	echo $sql2;
	if($result1==TRUE)
	{
		echo"<script>
		alert('Leave applied succesfully');
		window.location='apply_leave.php';
		</script>";
	}
	else
	{
		echo"<script>alert('Error in applying');
		window.location='apply_leave.php';
		</script>";
	}

?>
</body>
</html>


