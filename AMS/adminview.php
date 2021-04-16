<?php
session_start();
if(isset($_SESSION['email'])) {
    ?>


    <!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
              crossorigin="anonymous">

        <title>Admin</title>

        <style>
            body {
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                background: #031321;
                font-family: Consolas;
            }
            .wrap{
                position: relative;
                display: inline-block;
                padding: 10px 3px;
                text-transform: uppercase;
                letter-spacing: 4px;
                text-decoration: none;
                font-size: 24px;
                overflow: hidden;
                transition: 0.2s;
            }
            .btn {
                border: none;
                display: block;
                text-align: center;
                cursor: pointer;
                text-transform: uppercase;
                outline: none;
                overflow: hidden;
                position: relative;
                color: #fff;
                font-weight: 700;
                font-size: 15px;
                background-color: #222;
                padding: 17px 60px;
                margin: 0 auto;
                box-shadow: 0 5px 15px rgba(0,0,0,0.20);
            }

            .btn span {
                position: relative;
                z-index: 1;
            }

            .btn:after {
                content: "";
                position: absolute;
                left: 0;
                top: 0;
                height: 490%;
                width: 140%;
                background: #78c7d2;
                -webkit-transition: all .5s ease-in-out;
                transition: all .5s ease-in-out;
                -webkit-transform: translateX(-98%) translateY(-25%) rotate(45deg);
                transform: translateX(-98%) translateY(-25%) rotate(45deg);
            }

            .btn:hover:after {
                -webkit-transform: translateX(-9%) translateY(-25%) rotate(45deg);
                transform: translateX(-9%) translateY(-25%) rotate(45deg);
            }
            input[type=submit]{
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
            .wrapper {
                max-width: 100px;
                border-radius: 20px;
                margin-left: 200px;
                margin-right: 200px;
                box-sizing: border-box;
                padding: 10px;
                margin-top: 30px;
            }

        </style>
    </head>
    <body>

    <center>
        <div class="wrap">

        <button class="btn"><span><a href="tenant.php">Tenant Login</a></span></button>
            <br>
            <button class="btn"><span><a href="hall.php">Event Halls</a></span></button>
            <br>
            <button class="btn"><span><a href="cab.php">Booked Cab</a></span></button>
            <br>

            <button class="btn"><span><a href="pay.php">Payments</a></span></button>
            <br>
            <button class="btn"><span><a href="problem.php">Problems</a></span></button>
    </div>
    <!-- Optional JavaScript -->
        <div class="wrapper">
        <form action="logout.php">
        <input type="submit" value="logout">
        </form>
        </div>
    </center>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    </body>
    </html>
    <?php
}
else{
    echo "
		<script>
		window.location.href='adminlogin.php';
		</script>";
}
?>