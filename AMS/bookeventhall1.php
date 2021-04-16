<?php

$flatno=$_GET['flatno'];
$bname=$_POST['bname'];
$date=$_POST['date'];
$purpose=$_POST['purpose'];
// Create connection
$connection = mysqli_connect("localhost","root","","apartment");
$query="INSERT INTO `book_event_hall`( `Flat_No`, `Block_Name`, `Date`, `Purpose`) 
VALUES ('$flatno','$bname','$date','$purpose')";
$result=mysqli_query($connection,$query);
/*if($connection)
{
 echo "successfully";
}*/
if($result)
{
    echo "
    <script>
    window.location.href='payment.php';
    </script>";
}else{
    echo "
    <script>
    window.location.href='bookeventhall.php';
    </script>";
}
?>