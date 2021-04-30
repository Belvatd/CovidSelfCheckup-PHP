<?php
    session_start();

    if(!isset($_SESSION['username'])){
        header("location: index.php?access_denied");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IndiCheck|User</title>
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
    .welcome {
        color: #11bb221;
        font-size: 24pt;
        font-weight: 900;
        text-align: center;
    }
    </style>
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
                    <a class="nav-link" href="insight.php">Insight <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="berandacheckup.php">Check Up <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form class="form-inline ml-auto">
                <div class="navbar-nav">
                    <a href="logout.php" class="nav-item nav-link active">Logout</a>
                </div>
            </form>
        </div>
    </nav>
    <div>
        <img src="img/user.jpg" alt="" width=100% height=50%>
    </div>
    <div style="background-color: #B22222;">
        <br>
        <h1 class="welcome" style="color: white;">Selamat Datang <?php echo $_SESSION ['username'];?></h1>
        <br>
    </div>
    <div class="row">
        <div style=" width: 800px;
                    height: 400px;">
            <h1 style="  
            margin-top: 100px;
            margin-left: 200px;
            font-family: josefin sans;
            font-weight: 900;
            ">Yuk, Check Up!</h1>
            <br>
            <p style="margin-left: 200px; font-size: 12pt;"> <b> IndiCheck | Indikator Check Up Kondisi Tubuh </b>
                <br> Saat ini mulai maraknya penyebaran virus covid-19 <br>
                Maka diperlukan sebuah self-assesment, guna mendeteksi sejak dini gejala 
                yang anda alami</p>
            <br>
            <button class="btn btn-dark" style="margin-left: 200px;">
                <a href="berandacheckup.php" class="text-white">Cek diri anda sekarang!</a>
            </button>
        </div>
        <div style=" width: 200px;
                    height: 400px;">
            <img src="img/checkup.png" alt="" width=300px style="margin-left: 200px;  margin-top: 100px;">
        </div>
    </div>
    <div class="row">
        <div style=" width: 200px;
                height: 400px;">
            <img src="img/insight.png" alt="" width=400px style="margin-left: 200px;  margin-top: 100px;">
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
            ">Informasi seputar Covid-19</h1>
            <br>
            <p style="margin-left: 200px; text-align:right; font-size: 12pt;">
                ingin tahu gejala-gejala terinfeksi covid 19?
                <br> cara pencegahan? dan apa yang perlu dilakukan jika <br>
                terindikasi terinfeksi covid-19?
            </p>
            <br>
            <button class="btn btn-dark" style="margin-left: 660px;">
                <a href="insight.php" class="text-white">Yuk buka insight!</a>
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