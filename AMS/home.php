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

    <title>Tenant Activity</title>
    
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">SV APARTMENT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
          <?php
          $connection=mysqli_connect("localhost","root","","apartment");
          $sessionvar=$_SESSION['email'];
          $sql="SELECT * FROM tenent_login where E_mail='$sessionvar'";
          $result=mysqli_query($connection,$sql);
          if($result->num_rows>0) {
              while ($row = mysqli_fetch_assoc($result)) {
                  ?>
                  <a class="nav-link" href="billpayment.php?flatno=<?php echo $row['Flat_No'];?>">Bill Payment</a>
                  <?php
              }
          }
          ?>
      </li>
      <li class="nav-item">
          <?php
          $connection=mysqli_connect("localhost","root","","apartment");
          $sessionvar=$_SESSION['email'];
          $sql="SELECT * FROM tenent_login where E_mail='$sessionvar'";
          $result=mysqli_query($connection,$sql);
          if($result->num_rows>0) {
              while ($row = mysqli_fetch_assoc($result)) {
                  ?>
                  <a class="nav-link" href="bookcab.php?flatno=<?php echo $row['Flat_No'];?>">Book Cab</a>
                  <?php
              }
          }
          ?>
      </li>
      <li class="nav-item">
    <?php
    $connection=mysqli_connect("localhost","root","","apartment");
    $sessionvar=$_SESSION['email'];
    $sql="SELECT * FROM tenent_login where E_mail='$sessionvar'";
    $result=mysqli_query($connection,$sql);
    if($result->num_rows>0) {
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
        <a class="nav-link" href="bookeventhall.php?flatno=<?php echo $row['Flat_No'];?>">Book Event Hall</a>
            <?php
        }
    }
    ?>
      </li>
      <li class="nav-item">
          <?php
          $connection=mysqli_connect("localhost","root","","apartment");
          $sessionvar=$_SESSION['email'];
          $sql="SELECT * FROM tenent_login where E_mail='$sessionvar'";
          $result=mysqli_query($connection,$sql);
          if($result->num_rows>0) {
              while ($row = mysqli_fetch_assoc($result)) {
                  ?>
                  <a class="nav-link" href="reportproblem.php?flatno=<?php echo $row['Flat_No'];?>">Report Problem</a>
                  <?php
              }
          }
          ?>

      </li>
    </ul>
  </div>
  <form class="form-inline ml-3">
              <!-- <div class="input-group">
                   <input type="text" class="form-control" placeholder="search">-->
               <a href="logout.php" class="btn btn-dark btn-lg px-4 ml-3">LOGOUT</a>
  <div class="input-group-append">
                       <?php
                       $connection=mysqli_connect("localhost","root","","apartment");
                       $sessionvar=$_SESSION['email'];
                       $sql="SELECT * FROM tenent_login where E_mail='$sessionvar'";
                       $result=mysqli_query($connection,$sql);
                       if($result->num_rows>0) {
                           while ($row = mysqli_fetch_assoc($result)) {
                               ?>


                               <a href="update1.php?id=<?php echo $row['Flat_No'];?>" class="btn btn-dark btn-lg px-4 ml-3">
                                  Profile
                               </a>

                               <?php
                           }
                       }
                       ?>
                   </div>
    </form>
</nav>
<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/apartment/Images/apartment4.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h3>Hygiene Kitchen</h3>
          <p>Kitchen for healthy food</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/apartment/Images/apartment6.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h3>Hygiene Event Halls</h3>
          <p>Event Halls for your dream function</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/apartment/Images/apartment3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Swimming Pool</h5>
          <p>Swimming Pool for freshness of your mind</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <br>
  <br>
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
    header('Location:home.php');
}
?>