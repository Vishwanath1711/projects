<?php
session_start();
if(isset($_SESSION['email']))
{
    $connection=mysqli_connect("localhost","root","","apartment");
    ?>

    <html>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <body>

    <?php
    $sql="SELECT * FROM book_cab;";
    $result=mysqli_query($connection,$sql);
    $resultcheck=mysqli_num_rows($result);
//SELECT `User_id`, `User_name`, `User_email`, `User_address`, `User_phone_no`, `User_password` FROM `user` WHERE 1
    if($resultcheck>0)
    {
    ?>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Flat_No</th>
            <th scope="col">Date</th>
            <th scope="col">Time</th>
            <th scope="col">Purpose</th>
            <th scope="col">Cab_Type</th>
        </tr>
        </thead>


        <?php
        while($row=mysqli_fetch_assoc($result))
        {
            ?>

            <tr>
                <th scope="col"><?php echo $row['Flat_No'];?></th>
                <td><?php echo $row['Date'];?></td>
                <td><?php echo $row['Time'];?></td>
                <td><?php echo $row['Purpose'];?></td>
                <td><?php echo $row['Cab_Type'];?></td>
                <td><?php echo "<td><a href=delete.php?id=".$row['Flat_No']."><button class='btn-danger' >BOOK</button></a></td>"?>
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
        <button class="btn-primary" value="logout">BACK</button>
    </a>
    </body>
    </html>
    <?php
}
else
{
    header('Location:adminlogin.php');
}
?>
