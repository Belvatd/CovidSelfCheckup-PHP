<?php
include 'headerpetugas.php';
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
    <title>IndiCheck|Petugas</title>
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
    <div>
        <img src="img/user.jpg" alt="" width=100% height=50%>
    </div>
    <div style="background-color: #B22222;">
        <br>
        <h1 class="welcome" style="color: white;">Selamat Datang <?php echo $_SESSION ['username'];?></h1>
        <br>
    </div>
    <div style="background-color: white">
    <h1 style="  
            margin-top: 100px;
            text-align: center;
            font-family: josefin sans;
            font-weight: 900;
            ">Statistik</h1> <br>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card bg-danger" style="width: 18rem;">
                        <div class="card-body text-white">
                            <h5 class="card-title">Jumlah Check Up</h5>
                            <p class="card-text  text-white" style="font-size:60px" align="center">
                                <?php 
                            
                          $table ="kondisi";
                          $sql = mysqli_query($koneksi, "SELECT count(*) AS jumlah FROM $table");
                          $result = mysqli_fetch_array($sql);
                          echo $result['jumlah'];
                        ?>
                            </p>
                            <a href="datacek.php" class="text-white">lebih detail <i
                                    class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-warning" style="width: 18rem;">
                        <div class="card-body text-white">
                            <h5 class="card-title">Jumlah User</h5>
                            <p class="card-text  text-white" style="font-size:60px" align="center">
                                <?php 
                            
                            $table ="user";
                            $sql = mysqli_query($koneksi, "SELECT count(*) AS jumlah FROM $table WHERE id_level='user'");
                            $result = mysqli_fetch_array($sql);
                            echo $result['jumlah'];
                          ?>

                            </p>
                            <a href="datauser/datauser.php" class="text-white">lebih detail <i
                                    class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-info" style="width: 18rem;">
                        <div class="card-body text-white">
                            <h5 class="card-title">Jumlah Petugas</h5>
                            <p class="card-text  text-white" style="font-size:60px" align="center">
                                <?php 
                            
                          $table ="user";
                          $sql = mysqli_query($koneksi, "SELECT count(*) AS jumlah FROM $table WHERE id_level='petugas'");
                          $result = mysqli_fetch_array($sql);
                          echo $result['jumlah'];
                        ?>
                            </p>
                            <a href="datapetugas/datapetugas.php" class="text-white">lebih detail <i
                                    class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <br>
    <div class="row">
        <div style=" width: 800px;
                    height: 400px;
                    ">
            <h1 style="  
            margin-top: 100px;
            margin-left: 300px;
            font-family: josefin sans;
            font-weight: 900;
            ">Data Check Up</h1>
            <br>
            <p style="margin-left: 300px; font-size: 12pt;">Data orang yang melakukan checkup. <br> Tidak termasuk data user.</p>
            <br>
            <button class="btn btn-dark" style="margin-left: 300px;">
                <a href="datacek.php" class="text-white">Lihat Data</a>
            </button>
        </div>
        <div style=" width: 200px;
                    height: 400px;">
            <img src="img/data.png" alt="" width=300px style="margin-left: 50px;  margin-top: 100px;">
        </div>
    </div>
    <div class="row">
        <div style=" width: 200px;
                height: 400px;">
            <img src="img/jumlahuser.png" alt="" width=300px style="margin-left: 325px;  margin-top: 100px;">
        </div>
        <div style=" width: 800px;
                    height: 400px;
                    margin-left:200px;">
            <h1 style="  
            margin-top: 100px;
            margin-left: 200px;
            font-family: josefin sans;
            font-weight: 900;
            text-align:right;
            ">Data User</h1>
            <br>
            <p style="margin-left: 100px; text-align:right;  font-size: 12pt;">
                Data dari user yang telah melakukan registrasi. <br>
                Bukan orang yang melakukan check up. <br> <b>tambah, edit, dan hapus bisa anda lakukan.</b>
            </p>
            <br>
            <button class="btn btn-dark" style="margin-left: 700px;">
                <a href="datauser/datauser.php" class="text-white">Lihat Data</a>
            </button>
        </div>
    </div>
    <div class="row">
        <div style=" width: 800px;
                    height: 400px;">
            <h1 style="  
            margin-top: 100px;
            margin-left: 300px;
            font-family: josefin sans;
            font-weight: 900;
            ">Data Petugas</h1>
            <br>
            <p style="margin-left: 300px; font-size: 12pt;">Berisi data petugas IndiCheck<br><b>tambah, edit, dan hapus bisa anda lakukan.</b></p>
            <br>
            <button class="btn btn-dark" style="margin-left: 300px;">
                <a href="datapetugas/datapetugas.php" class="text-white">Lihat Data</a>
            </button>
        </div>
        <div style=" width: 200px;
                    height: 400px;">
            <img src="img/jumlahpetugas.png" alt="" width=300px style="margin-left: 50px;  margin-top: 100px;">
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