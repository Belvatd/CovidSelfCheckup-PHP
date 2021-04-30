<?php 
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IndiCheck|Insight Covid-19</title>
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
    .gejala {
        font-size: 14pt;
        color: black;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="halamanuser.php">
            <img src="img/logo.png" alt="logo" width="100px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Insight <span class="sr-only">(current)</span></a>
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
        <img src="img/insight.jpg" alt="" width=100% height=50%>
    </div>
    <div>
        <h1 style="font-family: josefin sans;
            font-weight: 900; text-align:center; margin-top:100px;">Apa itu Covid-19?</h1> <br>
    </div>
    <div class="container" style="margin-top:15px; width:75%">
        <img src="img/covid-19.png" alt="" width="500px" style="margin-left:300px">
        <p align="center" style="font-size:14pt; color:black;">
            <br>
            <b> Virus Corona atau severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2) </b>adalah virus yang
            menyerang sistem pernapasan.
            Penyakit karena infeksi virus ini disebut COVID-19. Virus Corona bisa menyebabkan gangguan ringan pada
            sistem pernapasan,
            infeksi paru-paru yang berat, hingga kematian.
        </p>
    </div>
    <div>
        <h1 style="font-family: josefin sans;
            font-weight: 900; text-align:center; margin-top:100px;">Gejala Covid-19</h1> <br>
    </div>
    <div class="row" style="margin-left:80px">
        <div style=" width: 200px;
                height: 400px;">
            <img src="img/batuk.png" alt="" width=150px style="margin-left: 325px;  margin-top: 100px;">
            <p align="center" style="margin-left: 370px;" class="gejala">
                <br> Batuk
            </p>
        </div>
        <div style=" width: 200px;
                height: 400px;">
            <img src="img/demam.png" alt="" width=150px style="margin-left: 425px;  margin-top: 100px;">
            <p align="center" style="margin-left: 470px;" class="gejala">
                <br> Demam
            </p>
        </div>
        <div style=" width: 200px;
                height: 400px;">
            <img src="img/pilek.png" alt="" width=150px style="margin-left: 525px;  margin-top: 100px;">
            <p align="center" style="margin-left: 570px;" class="gejala">
                <br> Sesak
            </p>
        </div>
    </div>
    <p class="container" align="center" style="font-size:14pt; color:black;">
        Gejala awal infeksi virus Corona atau COVID-19
        bisa menyerupai gejala flu, yaitu demam (suhu tubuh diatas 36'C), pilek, batuk kering,
        sakit tenggorokan, dan sakit kepala.
        Gejala-gejala COVID-19 ini umumnya muncul dalam waktu 2 hari sampai
        2 minggu setelah penderita terpapar virus Corona.
    </p>
    <div class="row">
        <div style=" width: 200px;
                height: 400px;">
            <img src="img/insight2.png" alt="" width=400px style="margin-left: 200px;  margin-top: 100px;">
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
            ">Kapan Harus ke Dokter?</h1>
            <br>
            <p style="margin-left: 200px; text-align:right; font-size: 12pt; color:black;">
                Segera lakukan isolasi mandiri bila Anda mengalami gejala infeksi virus Corona (COVID-19) seperti
                yang telah disebutkan di atas, terutama jika dalam 2 minggu terakhir Anda berada di daerah
                yang memiliki kasus COVID-19 atau kontak dengan penderita COVID-19. Setelah itu, hubungi
                hotline COVID-19 di 119 Ext. 9 untuk mendapatkan pengarahan lebih lanjut.
                <br>Bila Anda memerlukan pemeriksaan langsung oleh dokter, jangan langsung ke rumah sakit
                karena itu akan meningkatkan risiko Anda tertular atau menularkan virus Corona ke orang lain.
            </p>
        </div>
    </div>
    <div>
        <h1 style="font-family: josefin sans;
            font-weight: 900; text-align:center; margin-top:100px;">Pencegahan Covid-19</h1> <br>
    </div>
    <div class="container" style="margin-top:15px; width:75%">
        <img src="img/5.png" alt="" width="300px" style="margin-left:400px">
        <div>
            <ol> <br><br>
                <li style="margin-left: 370px;" class="gejala">
                    1. <b>TANGAN</b> dicuci lebih sering.
                </li>
                <li style="margin-left: 370px;" class="gejala">
                    2. <b>SIKU</b> untuk menutup mulut saat batuk.
                </li>
                <li style="margin-left: 370px;" class="gejala">
                    3. <b>WAJAH</b> jangan disentuh.
                </li>
                <li style="margin-left: 370px;" class="gejala">
                    4. <b>JARAK</b> jaga jarak aman.
                </li>
                <li style="margin-left: 370px;" class="gejala">
                    5. <b>RUMAH</b> usahakan di rumah aja.
                </li>
            </ol>
        </div>
    </div>
</body>

</html>
<?php 
include 'footer.php';
?>