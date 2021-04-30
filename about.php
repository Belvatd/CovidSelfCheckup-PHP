<?php
    include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IndiCheck|About</title>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <style>
        .logo{
        margin-left:650px;
        margin-top: 30px;
        margin-bottom: 30px;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="halamanawal1.php">
            <img src="img/logo.png" alt="logo" width="100px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">About<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown active ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Daftar/Masuk
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="index.php">Masuk</a>
                        <a class="dropdown-item" href="registrasi.php">Daftar</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div>
        <img src="img/belva.jpg" alt="" width=100% height=50%>
    </div>
    <div style="background-color: #B22222;">
        <br>
        <h1 align="center" style=" font-family: josefin sans;
            font-weight: 900; color:white;">About Me</h1>
        <br>
    </div>
    <div class="row">
        <div style=" width: 800px;
                    height: 400px;">
            <h1 style="  
            margin-top: 100px;
            margin-left: 300px;
            font-family: josefin sans;
            font-weight: 900;
            ">Hi! I'm Belva</h1>
            <br>
            <table style="margin-left: 300px; font-size: 12pt;">
                <thead>
                    <th width="150px"></th>
                    <th></th>
                </thead>
                <tbody>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>: Belva Talitha Dwiyanti</td>
                    </tr>
                    <tr>
                        <td>Sekolah</td>
                        <td>: SMK Telkom Malang</td>
                    </tr>
                    <tr>
                        <td>Telp.</td>
                        <td>: 087859630660</td>
                    </tr>
                    <tr>
                        <td>Instagram</td>
                        <td><a href="https://www.instagram.com/belvatalita/?hl=id" target="blank">: @belvatalita</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div style=" width: 200px;
                    height: 400px;">
            <img src="img/dataprofil.png" alt="" width=300px style="margin-left: 100px;  margin-top: 100px;">
        </div>
        <div class="row" style="background-color: #B22222;">
        <div style=" width: 200px;
                height: 400px; width:450px">
            <img src="img/smk.png" alt="" width=400px style="margin-left: 200px;  margin-top: 100px;">
        </div>
        <div style=" width: 800px;
                    height: 400px;
                    margin-left:300px;">
            <h1 style="  
            margin-top: 100px;
            margin-right:100px;
            font-family: josefin sans;
            font-weight: 900;
            text-align:right;
            color:white;
            ">My School</h1>
            <br>
            <p style="margin-right: 100px; text-align:right; font-size: 12pt; color:white;">
            SMK Telkom Malang adalah pelopor Sekolah menengah kejuruan pertama di Indonesia di 
            bidang Teknologi dan Informatika. Berpengalaman dari tahun 1992 yang telah terakreditasi 
            "A" dan mempunyai standart mutu ISO 9001:2015.
            </p>
            <br>
            <button class="btn btn-dark" style="margin-left: 475px;">
                <a href="https://www.smktelkom-mlg.sch.id/" class="text-white" target="blank">Kunjungi SMK Telkom Malang</a>
            </button>
        </div>
    </div>
    <div class="limiter" style="background-color:#333333; margin-top: 200px;">
    <img src="img/logoputih.png" alt="" class="logo" width="200px">
    </div>
     <!--===============================================================================================-->
     <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
</body>
</html>
