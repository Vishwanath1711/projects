<?php
$connection=mysqli_connect("localhost","root","","apartment");
$query="DELETE FROM `book_cab` WHERE Flat_No='$_GET[id]'";
$result=mysqli_query($connection,$query);
//echo "deleted successfully";
if($result)
{
    echo "
      <script>
      alert('BOOKED SUCCESSFULLY');
      window.location.href='cab.php';
			</script>";
}
?>

?>