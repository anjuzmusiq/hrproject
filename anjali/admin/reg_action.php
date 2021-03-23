<html>
<head></head>
<body>
<?php
session_start();
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
$_SESSION['email']=$email;
$s="select email from login where email='$email'";
$s1=mysqli_query($con,$s)or die("Error");
$numrows=mysqli_num_rows($s1);
if($numrows==0)
{
$sql2="INSERT INTO login(email,password,type) values ('$email','$password','employee')";
$result1=mysqli_query($con,$sql2);
$sql5="INSERT INTO employee(f_name,l_name,gender,department,designation,email,address,mobile,salary,join_date,dob,password,c_password,emp_status) values ('$f_name','$l_name','$gender','$department','$designation','$email','$address','$mobile','$salary','$join_date','$dob','$password','$c_password','working')";
$result5=mysqli_query($con,$sql5);
if($result1==TRUE)
{
echo"<script>
window.location='addemploy.php';
alert('registration success');
</script>";
}
else
{
echo"<script>alert('not registered');
window.location='addemploy.php';
</script>";
}
}
else
{
echo"<script>alert('email already exist');
window.location='addemploy.php';

</script>";
}
?>
</body>
</html>
