<?php
$email=$_POST['email'];
$phone=$_POST['phone'];
$flatno=$_POST['flatno'];
$connection=mysqli_connect("localhost","root","","apartment");
/*if($connection)
{
    echo "connected";
}*/
$sql="UPDATE `tenent_login` SET E_mail='$email', Phone_No='$phone' WHERE Flat_No='$flatno'";
$result=mysqli_query($connection,$sql);
print_r($result);
if($result)
{
    session_start();
    $_SESSION['email']=$email;
    echo"<script> alert('success');</script>";
    echo "<script>   window.location.href='home.php';</script>";
}
else{
    echo"<script> alert('unsuccess');</script>";
    echo "<script>   window.location.href='home.php';</script>";
}
?>