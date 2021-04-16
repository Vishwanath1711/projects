<?php

$flatno=$_GET['flatno'];
$date=$_POST['date'];
$time=$_POST['time'];
$purpose=$_POST['purpose'];
$cabtype=$_POST['cabtype'];
// Create connection
$connection = mysqli_connect("localhost","root","","apartment");
$query="INSERT INTO `book_cab`(`Flat_No`, `Date`, `Time`, `Purpose`, `Cab_Type`) 
VALUES ('$flatno','$date','$time','$purpose','$cabtype')";
$q=mysqli_query("SELECT * FROM book_cab where Flat_No='".$flatno."'");
$result=mysqli_query($connection,$query);
if($result)
{
    echo "
    <script> alert('Cab booked successfully');
    window.location.href='home.php';
    </script>";
}else{
    echo "
    <script>
    window.location.href='bookcab.php';
    </script>";
}
?>