<html>
<head></head>
<body>
<?php
session_start();
include 'connect.php';
$l_id=$_GET['id'];
echo $email;
$sql2="UPDATE leaves set l_status='declined' where l_id='$l_id'";
$result1=mysqli_query($con,$sql2);
echo $sql2;
if($result1==TRUE)
{
echo"<script>
window.location='leave.php';
alert('LEAVE APPLIED IS DECLINED');
</script>";
}
else
{
echo"<script>alert('Failed');
window.location='leave.php';
</script>";
}
?>
</body>
</html>
