<?php
$name=$_POST['name'];
$flatno=$_GET['flatno'];
$complaint=$_POST['complaint'];
$date=$_POST['date'];
$connection=mysqli_connect("localhost","root","","apartment");
//echo "connected";
//$sql= "call getcontact(NULL,$name,$email,$message)";
mysqli_query($connection,"SET @name='".$name."'");
mysqli_query($connection,"SET @flatno='".$flatno."'");
mysqli_query($connection,"SET @complaint='".$complaint."'");
mysqli_query($connection,"SET @date='".$date."'");
$result=mysqli_query($connection,"call problems(@name,@flatno,@complaint,@date)");
if($result)
{
    echo"
      <script> alert('Complaint reported successfully');
      window.location.href='home.php'</script>";
}
else{
     echo "<script>alert('try again');
     window.location.href='reportproblem.php'</script>";
}
?>