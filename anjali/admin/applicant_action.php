<html>
<head></head>
<body>
<?php
session_start();
include 'connect.php';
$sql="UPDATE application set status='close'";
$result1=mysqli_query($con,$sql);
if($result1==TRUE)
{
echo"<script>
alert('Deleted Successfully');
window.location='applicant.php';
</script>";
}
else
{
echo"<script>
alert('Delete Failed');
window.location='applicant.php';
</script>";
}
?>
</body>
</html>
