<?php
session_start();
if(isset($_SESSION['email']))
{
    ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Book Event Hall</title>
    <style>
    body{
      background-image:url('Images/apartment9.jpg');
      height:100vh;
      background-size:cover;
      background-position:center;
    }
    .wrap{
	max-width: 1000px;
	border-radius: 20px;
    margin-left: 200px;
    margin-right: 200px;
    background: rgba(0,0,0,0.8);
	box-sizing: border-box;
	padding: 10px;
	margin-top: 100px; 
    }
    input[type=submit]
    {
        width: 100%;
        box-sizing: border-box;
        padding: 10px 0;
        margin-top: 30px;
        outline: none;
        border: none;
        background: #60adde;
        opacity: 0.7;
        border-radius: 20px;
        font-size: 20px;
        color: #fff;
    }
        h5{
            box-sizing: border-box;
            color: white;

        }
    </style>
  </head>
  <body>
  <div class="wrap">
    <?php
    $connection=mysqli_connect("localhost","root","","apartment");
    $sessionvar=$_SESSION['email'];
    $sql="SELECT * FROM tenent_login where E_mail='$sessionvar'";
    $result=mysqli_query($connection,$sql);
    if($result->num_rows>0) {
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
  <form action="bookeventhall1.php?flatno=<?php echo $row['Flat_No'];?>"method="POST">
      <?php
      }
      }
      ?>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <font color="white"><label for="validationServer01">Flat Number</label></font>

        <h5><?php
        echo "$_GET[flatno]";
        ?></h5>
      <font color="white"> <label for="validationServer05">Block Name</label></font>
      <input type="text" class="form-control" id="validationServer05" placeholder="Block Name" name="bname" required>
    
      <font color="white"><label for="validationServer02">Date</label></font>
     <input type="date" class="form-control" id="validationServer02" placeholder="dd/mm/yyyy" name="date" required>

     <font color="white"> <label for="validationServer05">Purpose</label></font>
      <input type="text" class="form-control" id="validationServer05" placeholder="Purpose" name="purpose" required>
      <br>
      <br>
      <input type="submit" value="Payment">
  </div>

  </div>
  
</form>
</div>


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
    header('Location:login.php');
}
?>