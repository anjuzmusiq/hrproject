<html>
<head></head>
<body>
<?php
session_start();
include 'connect.php';
$dept_id=$_POST['dept_id'];
$desig_id=$_POST['desig_id'];
$vacancy_status=$_POST['vacancy_status'];
$sql2="UPDATE dd set vacancy_status='$vacancy_status' where dept_id='$dept_id' and desig_id='$desig_id'";
$result1=mysqli_query($con,$sql2);
if($result1==TRUE)
{
echo"<script>
alert('Update Successfully');
window.location='vacancy_delete.php';
</script>";
}
else
{
echo"<script>
alert('Update Failed');
window.location='vacancy_delete.php';
</script>";
}
?>
</body>
</html>
