<?php
$email=$_POST['email'];
$password=$_POST['password'];
$connection=mysqli_connect("localhost","root","","apartment");
		$hashedpassword=hash("md5",$password);
		$sql_e="SELECT * FROM `tenent_login` WHERE E_mail = '$email' and Password = '$hashedpassword'";
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
		window.location.href='home.php';</script>";
		
		}
        else
        {
			echo "
		<script>
		alert('you are not a member');
		window.location.href='registration.php';
		</script>";	
		}
		
?>