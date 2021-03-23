<?php
$con=mysqli_connect("localhost","root","","hr");
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
	$_SESSION['email']=$email;
	$sql="select * from login where email='$email' and password='$password'";
	$result=mysqli_query($con,$sql);
		if( $data=mysqli_fetch_assoc($result))
		{
			$data["type"];
			if($data["type"]=='admin')
			{
				?>
				<script>
				window.location='admin/index.php';
					alert("welcome admin");
				</script>
				<?php
			}
			else if($data["type"]=='employee')
			{
				?>
				<script>
				window.location='employee/index.php';
				alert('welcome employee');
				</script>
				 <?php
			}
		
		}
		else if($email==$data["email"]&&$password!=$data["password"])
			{
				 ?>
				<script>
				window.location='index.php';
				alert('password incorrect');
				</script>
				 <?php
			}
			else if($email!=$data["email"]&&$password==$data["password"])
			{
				 ?>
				<script>
				window.location='index.php';
				alert('email incorrect');
				</script>
				 <?php
			}
			else
			{
				?>
				<script>
				window.location='index.php';
				alert('invalid');
				</script>
				<?php
			}
			
?>