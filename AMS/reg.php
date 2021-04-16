<?php
$name=$_POST['name'];
$flatno=$_POST['flatno'];
$flattype=$_POST['flattype'];
$block=$_POST['block'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];
// Create connection
if($password==$confirmpassword) {
    $connection = mysqli_connect("localhost", "root", "", "apartment");
    $hashedpassword = hash("md5", $password);
    $query = "INSERT INTO `tenent_login`(`Name`, `Flat_No`, `Flat_Type`, `Block_Name`, `Phone_No`, `E_mail`, `Password`) 
VALUES ('$name','$flatno','$flattype','$block','$phone','$email','$hashedpassword');";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "
    <script>
    alert('Email not proper');
    window.location.href='registration.php';
    </script>";
        }
        else if(!preg_match("/^[a-zA-Z\s]+$/",$name)) {
            echo "
    <script>
    alert('Name is must be String');
    window.location.href='registration.php';
    </script>";
        }
        else if(!preg_match("/^[0-9]*$/",$phone)) {
            echo "
    <script>
    alert('Mobile number is not proper');
    window.location.href='registration.php';
    </script>";
        }
        else if((strlen($phone)<10)||(strlen($phone)>10)) {
            echo "
    <script>
    alert('Mobile number must be ten digits');
    window.location.href='registration.php';
    </script>";
        }
        else{

        $result = mysqli_query($connection, $query);
        /*if($connection)
        {
         echo "successfully";
        }*/
        if ($result) {
            echo "
    <script>
    alert('registration successful');
    window.location.href='login.php';
    </script>";
        } else {
            echo "
    <script>
    alert('please register');
    window.location.href='registration.php';
    </script>";
        }
    }
}
else{
    echo "
    <script>
    alert('password doesnot match');
    window.location.href='registration.php';
    </script>";
}

?>