<?php
include 'config.php';

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["Passw"];
    $sql = mysqli_query($conn, " SELECT count(*) as total from user where username = '$username' and Passw = '$password'") or die(mysqli_error($conn));
    $row = mysqli_fetch_array($sql);
    if ($row['total'] > 0) {
        header('location:xuly.php');
    } else {
        echo " <script>alert('username  and password are incorrect')</script>";
    }
}
?>

<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!doctype html>
<html>

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Official Signup Form Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- fonts -->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    <!-- /fonts -->
    <!-- css -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel='stylesheet' type='text/css' media="all" />


    <!-- /css -->
</head>

<body>
    <h1 class="w3ls">Welcome back</h1>
    <div class="content-w3ls">
        <div class="content-agile1">
            <img src="./images/logonek.png" style="width: 150px; height: 150px;"
            >
            <h2 class="agileits1">HLL</h2>
            <p class="agileits2">Future HLL takes the lead</p>
        </div>
        <div class="content-agile2">
            <form action="#" method="post">
                <div class="form-control w3layouts">
                    <input type="text" id="firstname" name="username" placeholder="Username" title="Please enter your username" required="">
                </div>


                <div class="form-control agileinfo">
                    <input type="password" class="" name="Passw" placeholder="Password" id="password1" required="">
                </div>


                <input type="submit" name="submit" class="register">
                <hr>
                <div style="text-align: center; ">

                    <button type="button" style="background-color:#3970b0;  width: 335px;
    ; margin: 30px auto; height:55px; "><a href="index.php" style=" color: white;    font-size: 17px; ">Trang Chủ</a></button>
                </div>


            </form>
            <p class="wthree w3l"></p>

        </div>
        <div class="clear"></div>
    </div>
    <p class="copyright w3l">© HLL team | Design by </p>
</body>

</html>