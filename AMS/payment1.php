<?php
$flatno=$_POST['flatno'];
$trid=$_POST['trid'];
$epay=$_POST['epay'];

// Create connection
$connection = mysqli_connect("localhost","root","","apartment");
$query="INSERT INTO `payment1`(`Flat_No`, `Transaction_Id`, `Event_Hall_Payment`) 
VALUES ('$flatno','$trid','$epay')";
$result=mysqli_query($connection,$query);
/*if($connection)
{
 echo "successfully";
}*/
if($result)
{
    echo "
    <script>
    alert('Payment Successful');
    window.location.href='home.php';
    </script>";
}else{
    echo "
    <script>
    alert('Payment Unsuccessful!!! Try Again!!!');
    window.location.href='payment.php';
    </script>";
}
?>