<?php
$connection=mysqli_connect("localhost","root","","apartment");
$query="DELETE FROM `book_event_hall` WHERE Flat_No='$_GET[id]'";
$result=mysqli_query($connection,$query);
//echo "deleted successfully";
if($result)
{
    echo "
      <script>
      alert('BOOKED SUCCESSFULLY');
      window.location.href='hall.php';
			</script>";
}
?>

?>