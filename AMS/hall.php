<?php
session_start();
if(isset($_SESSION['email']))
{
    $connection=mysqli_connect("localhost","root","","apartment");
    ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Event Hall View</title>
  </head>
  <body>
    <body>

    <?php
    $sql="SELECT b.Flat_No,b.Block_Name,b.Date,b.Purpose,p.Transaction_Id,p.Event_Hall_Payment 
FROM book_event_hall b,payment1 p where b.Flat_No=p.Flat_No;";
    $result=mysqli_query($connection,$sql);
    $resultcheck=mysqli_num_rows($result);
//SELECT `User_id`, `User_name`, `User_email`, `User_address`, `User_phone_no`, `User_password` FROM `user` WHERE 1
    if($resultcheck>0)
    {
    ?>
    <div></div>
    <table class="table table-hover table-dark">
        <thead>
        <tr>
            <th scope="col">Flat_No</th>
            <th scope="col">Block_Name</th>
            <th scope="col">Date</th>
            <th scope="col">Purpose</th>
            <th scope="col">Transaction_Id</th>
            <th scope="col">Event_Hall_Payment</th>
        </tr>
        </thead>


        <?php
        while($row=mysqli_fetch_assoc($result))
        {
            ?>

            <tr>
                <th scope="col"><?php echo $row['Flat_No'];?></th>
                <td><?php echo $row['Block_Name'];?></td>
                <td><?php echo $row['Date'];?></td>
                <td><?php echo $row['Purpose'];?></td>
                <td><?php echo $row['Transaction_Id'];?></td>
                <td><?php echo $row['Event_Hall_Payment'];?></td>
                <td><?php echo "<td><a href=delete1.php?id=".$row['Flat_No']."><button class='btn-danger' >BOOK</button></a></td>"?>
            </tr>

            <?php
        }
        }
        else
        {
            echo "<h1><center>No Data Found!!!!!!</center></h1>";
        }
        ?>

    </table>
    <a href="adminview.php">
    <center><button type="button" class="btn btn-primary btn-lg">Back</button></center>
    </a>
    </body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
    
    <?php
}
else
{
    header('Location:adminlogin.php');
}
?>