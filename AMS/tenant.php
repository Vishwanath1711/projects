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

    <title>Tenant Login Details</title>
    <style>
    wrapped{
        margin:auto;
        padding:70px;
    }
    wrap{

    }
    </style>
  </head>
  <body>
  <?php
    $sql="SELECT * FROM tenent_login;";
    $result=mysqli_query($connection,$sql);
    $resultcheck=mysqli_num_rows($result);
//SELECT `User_id`, `User_name`, `User_email`, `User_address`, `User_phone_no`, `User_password` FROM `user` WHERE 1
    if($resultcheck>0)
    {
    ?>
    <div class="wrap">
    <center><h1>Login Details</h1></center>
    </div>

    <div class="wrapped">
    <table class="table table-hover table-dark">
        <thead>
        
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Flat_No</th>
            <th scope="col">Flat_Type</th>
            <th scope="col">Block_Name</th>
            <th scope="col">Phone_No</th>
            <th scope="col">E_mail</th>
            <th scope="col">Password</th>
        </tr>
        </thead>


        <?php
        while($row=mysqli_fetch_assoc($result))
        {
            ?>
<tbody>
            <tr>
                <th scope="col"><?php echo $row['Name'];?></th>
                <td><?php echo $row['Flat_No'];?></td>
                <td><?php echo $row['Flat_Type'];?></td>
                <td><?php echo $row['Block_Name'];?></td>
                <td><?php echo $row['Phone_No'];?></td>
                <td><?php echo $row['E_mail'];?></td>
                <td><?php echo $row['Password'];?></td>
            </tr>
            </tbody>
            <?php
        }
        }
        else
        {
            echo "<h1><center>No Data Found!!!!!!</center></h1>";
        }
        ?>

    </table>
    </div>
    <a href="adminview.php">
    <center><button type="button" class="btn btn-primary btn-lg">Back</button></center>
    </a>

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
