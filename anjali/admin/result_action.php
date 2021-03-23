<html>
<head></head>
<body>
<?php
include 'connect.php';
$email=$_POST['email'];
$application_status=$_POST['application_status'];
$sql="UPDATE application set application_status='$application_status' where email='$email'and status='open'";
$result=mysqli_query($con,$sql);
if($result==TRUE)
{
echo"<script>alert('STATUS CHANGED');
window.location='result.php';
</script>";
}
else
{
echo"<script>alert('ERROR');
window.location='result.php';
</script>";
}

?>

</body>
</html>