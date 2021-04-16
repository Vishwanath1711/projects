<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style1.css">
	<title>LOGIN PAGE</title>
	<style>
	body{
	 background-image:url('Images/apartment2.jpg');
      height:100vh;
      background-size:cover;
      background-position:center;
}
	  </style>
	
</head>

<body a link="red" vlink="#f39c12">


<div class="wrap">
<h2>Login</h2>
<form action="login1.php" method="POST">
	
	
	<input type="text" name="email" placeholder="Enter Email" required>
	<input type="Password" name="password" placeholder="Enter Password" required>
	<input type="submit" value="SUBMIT">
</form>
<p ><font color="D3D3D3"><b>Not registered?</b></font></p>
<a href="registration.php">Register</a>


</body>
</html>