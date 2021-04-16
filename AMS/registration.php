<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION PAGE</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
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
<header>
	<nav>
		<div class="main-wrapper">
			<ul>
				<li><a href="registration.php"></a>
				</li>
			</ul>

<div class="wrap">
<h2>Register Here</h2>
<form action="reg.php" method="POST">
	<input type="text" name="name"placeholder="Enter Name" required>
	<input type="text"  name="flatno" placeholder="Enter Flat No" required>
	<input type="text" name="flattype" placeholder="Enter Flat Type" required>
	<input type="text" name="block" placeholder="Enter Block Name" required>
	<input type="text" name="phone" placeholder="Enter Phone No" required>
	<input type="text" name="email" placeholder="Enter E-mail" required>
	<input type="Password" name="password" placeholder="Enter Password" required>
	<input type="Password" name="confirmpassword" placeholder="Confirm Password" required>
	<input type="submit" value="SUBMIT">
</form>
<p><font color="D3D3D3"><b>Already a user?</b></font></p>
<a href="login.php">Login</a>

</div>
</header>
</body>
</html>