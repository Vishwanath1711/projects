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

        <title>Profile</title>
        <style>
        body{
      
      height:100vh;
      background-size:cover;
      background-position:center;
    }
    input[type=submit]
{
	width: 20%;
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
    </style>
    </head>
    <body>
    <?php
    $connection=mysqli_connect("localhost","root","","apartment");
       $flatno=$_GET['id'];
            $sql="SELECT * FROM tenent_login WHERE Flat_No='$flatno'";
            $result=mysqli_query($connection,$sql);
            if($result->num_rows>0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>

                    <font color="#800000" size="4" face="Elephant">
                        <br>
                        <br>
                        <h1 align="center">EDIT PROFILE</h1>
                        <br>
                        <br>

                        <center><form action="edit.php" method="POST" autocomplete="on">

                                <input type="text" name="flatno" value="<?php echo $flatno?>" hidden>

                                EMAIL<input type="text" name="email" value="<?php echo $row['E_mail'];?>">
                                <br>
                                <br>
                                PHONE<input type="text" name="phone" value="<?php echo $row['Phone_No'];?>">
                                <br>
                                <br>
                                <input type="submit" value="submit">
                                <br>
                                <br>
                                <button><a href="home.php">BACK</a> </button>

                    </font>

                    </form></center>






                    <?php
                }
            }
 ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
    </html>

    <?php
}
else{
    echo "<script>   window.location.href='home.php';</script>";
}
?>