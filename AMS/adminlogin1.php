<?php
$email=$_POST['email'];
$password=$_POST['password'];
$connection=mysqli_connect("localhost","root","","apartment");
		$sql_e="SELECT * FROM `admin_login` WHERE email = '$email' and password = '$password'";
		$result=mysqli_query($connection,$sql_e);
		//print_r($result);
		if( $result->num_rows > 0)
		{
			echo "
		<script>
		alert('login successful');
		</script>";
session_start();
$_SESSION['email']=$email;
echo "<script>
		window.location.href='adminview.php';</script>";
		
		}
        else
        {
			echo "
		<script>
		alert('you are not a member');
		window.location.href='adminlogin.php';
		</script>";	
		}
		
?>