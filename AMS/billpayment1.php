<?php

$flatno=$_GET['flatno'];
$date=$_POST['date'];
$wbill=$_POST['wbill'];
$ebill=$_POST['ebill'];
$trid=$_POST['trid'];
// Create connection
$connection = mysqli_connect("localhost","root","","apartment");
$query="INSERT INTO `bill_payment`(`Flat_No`, `Date`, `Water_Bill`, `Electricity_Bill`, `Transaction_Id`) VALUES 
('$flatno','$date','$wbill','$ebill','$trid');";
$result=mysqli_query($connection,$query);

/*if($connection)
{
 echo "successfully";
}*/
if($result)
{
    echo "
    <script>
    alert('Bill Payment Successful');
    window.location.href='home.php';
    </script>";
}else{
    echo "
    <script>
    alert('Payment Unsuccessful!!! Try Again!!!');
    window.location.href='billpayment.php';
    </script>";
}
?>