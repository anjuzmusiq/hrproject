<html>
<head></head>
<body>
<?php
include 'connect.php';
$f_name=$_POST['f_name'];
$l_name=$_POST['l_name'];
$gender=$_POST['gender'];
$department=$_POST['department'];
$designation=$_POST['designation'];
$email=$_POST['email'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$salary=$_POST['salary'];
$join_date=$_POST['join_date'];
$dob=$_POST['dob'];
$password=$_POST['password'];
$c_password=$_POST['c_password'];
$emp_status=$_POST['emp_status'];
$sql2="UPDATE employee set f_name='$f_name',l_name='$l_name',gender='$gender',department='$department',designation='$designation',email='$email',address='$address',mobile='$mobile',salary='$salary',join_date='$join_date',dob='$dob',password='$password',c_password='$c_password',emp_status='$emp_status' where email='$email'";
$result1=mysqli_query($con,$sql2);
if($result1==TRUE)
{
echo"<script>alert('Updated Successfully');
window.location='edit.php';
</script>";
}
else
{
echo"<script>alert('Update Failed');
window.location='edit.php';
</script>";
}
?>
</body>
</html>
