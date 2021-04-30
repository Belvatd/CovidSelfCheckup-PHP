<?php
    include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IndiCheck</title>
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
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="img/logo.png" alt="logo" width="100px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="about.php">About<span class="sr-only">(current)</span></a>
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
        <img src="img/dokter.jpg" alt="" width=100% height=50%>
    </div>
    <div class="row">
        <div style=" width: 800px;
                    height: 400px;">
            <h1 style="  
            margin-top: 100px;
            margin-left: 200px;
            font-family: josefin sans;
            font-weight: 900;
            ">IndiCheck</h1>
            <br>
            <p style="margin-left: 200px;  font-size: 12pt;">Membantu anda untuk mendeteksi gejala covid-19. Berisi self assesment sebagai
                metode
                pengecekan kondisi tubuh, dan apa yang seharusnya anda lakukan. Terdapat Insight tentang covid-19 yang
                bisa membantu anda
                untuk mencegah diri tertular covid-19. <br> <b> Daftar/Masuk untuk bisa melakukan Check up!</b></p>
            <br>
            <div class="dropdown" style=" margin-left: 200px; ">
                <button class="btn btn-dark dropdown-toggle login100-form-btn" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Daftar/Masuk
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="index.php">Masuk</a>
                    <a class="dropdown-item" href="registrasi.php">Daftar</a>
                </div>
            </div>
        </div>
        <div style=" width: 200px;
                    height: 400px;">
            <img src="img/masuk.png" alt="" width=425px style="margin-left: 200px;  margin-top: 100px;">
        </div>
    </div>
    <div class="row">
        <div style=" width: 200px;
                height: 400px;">
            <img src="img/profil.png" alt="" width=250px style="margin-left: 275px;  margin-top: 100px;">
        </div>
        <div style=" width: 800px;
                    height: 400px;
                    margin-left:300px;">
            <h1 style="  
            margin-top: 100px;
            margin-left: 200px;
            font-family: josefin sans;
            font-weight: 900;
            text-align:right;
            ">Profil</h1>
            <br>
            <p style="margin-left: 200px; text-align:right;  font-size: 12pt;">
                Assalamualaikum! web ini dibuat untuk membantu masyarakat dan tenaga medis untuk mencegah semakin menyebarnya covid-19.
                Semakin memburuknya kondisi saat ini, semoga masyarakat bisa sadar untuk tetap berada di rumah, melakukan Physical
                Distancing, dan mengikuti protokol kesehatan terkait covid-19.
                <br> <b>lihat profil saya:)</b>
            </p>
            <br>
            <button class="btn btn-dark" style="margin-left: 700px;">
                <a href="about.php" class="text-white">lebih detail</a>
            </button>
        </div>
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
<?php 
include 'footer.php';
?>