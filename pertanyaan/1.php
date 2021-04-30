<?php 
include '../connect.php';
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IndiCheck|Form Check Up</title>
    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css/util.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <style>
    body {
        background-color: #dee3e2;
    }
    </style>

</head>

<body>

    <br>
    <form action="" method="post">
        <div class="container">
            <div class="col-md-15">
                <div class="card" style="width: 1000px;">
                    <div class="card-body">
                        <table>
                            <thead>
                                <th width="200px"></th>
                                <th width="800px"></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="2" align="center">
                                        <h3>Data Diri</h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="80px">Nama Lengkap</td>
                                    <td> <input class="form-control" type="text" name="namalengkap"
                                            placeholder="Nama Lengkap"></td>
                                </tr>
                                <tr>
                                    <td height="80px">Jenis Kelamin</td>
                                    <td>
                                        <input type="radio" name="jeniskelamin" value="L" />Laki-laki
                                        <input type="radio" name="jeniskelamin" value="P" />Perempuan
                                    </td>
                                </tr>
                                <tr>
                                    <td height="80px">Usia</td>
                                    <td><input class="form-control" type="text" name="usia" placeholder="Usia"></td>
                                </tr>
                                <tr>
                                    <td height="80px">Alamat</td>
                                    <td><input class="form-control" type="text" name="alamat" placeholder="Alamat"></td>
                                </tr>
                                <tr>
                                    <td height="80px">No. Telp</td>
                                    <td><input class="form-control" type="text" name="telp" placeholder="XXXXXXXXXXXX">
                                        <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="80px">Suhu Tubuh</td>
                                    <td><input class="form-control" type="number" name="suhu"
                                            placeholder="suhu tubuh saat ini">
                                        <br>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div style="width: 1000px;">
                <br>
                <div class="card">
                    <div class="card-body">

                        <h3 style="margin-top=1000px; margin-left:100px">1. Apakah Anda mengalami salah satu dari yang
                            berikut:
                        </h3>
                        <br>
                        <ul type="square" style="margin-top=1000px; margin-left:100px">
                            <li>- Kesulitan bernafas yang parah (Bernafas dengan sangat cepat atau berbicara dalam satu
                                kata)
                            </li>
                            <li>- Nyeri dada yang parah</li>
                            <li>- Sulit untuk bangun</li>
                            <li>- Merasa kebingungan</li>
                            <li>- Penurunan kesadaran</li>
                        </ul>
                        <br>
                        <table style="margin-top=1000px; margin-left:100px">
                            <thead>
                                <th width="100px"></th>
                                <th width="100px"></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="radio" name="jawaban1" value="terdeteksi" />Ya</td>
                                    <td><input type="radio" name="jawaban1" value="aman" />Tidak</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <h3 style="margin-top=1000px; margin-left:100px">2. Apakah Anda mengalami salah satu dari yang
                            berikut:
                        </h3>
                        <br>
                        <ul style="margin-top=1000px; margin-left:100px">
                            <li>- Nafas yang pendek saat istirahat</li>
                            <li>- Ketidakmampuan untuk berbaring karena kesulitan bernafas</li>
                            <li>- Kondisi kesehatan kronis yang anda alami dirasakan lebih berat karena kesulitan
                                bernapas</li>
                        </ul>
                        <br>
                        <table style="margin-top=1000px; margin-left:100px">
                            <thead>
                                <th width="100px"></th>
                                <th width="100px"></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="radio" name="jawaban2" value="terdeteksi" />Ya</td>
                                    <td><input type="radio" name="jawaban2" value="aman" />Tidak</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <h3 style="margin-top=1000px; margin-left:100px">3. Apakah Anda mengalami salah satu dari yang
                            berikut:
                        </h3>
                        <br>
                        <ul type="square" style="margin-top=1000px; margin-left:100px">
                            <li>- Demam</li>
                            <li>- Batuk</li>
                            <li>- Bersin</li>
                            <li>- Sakit Tenggorokan</li>
                            <li>- Sulit Bernafas</li>
                        </ul>
                        <br>
                        <table style="margin-top=1000px; margin-left:100px">
                            <thead>
                                <th width="100px"></th>
                                <th width="100px"></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="radio" name="jawaban3" value="terdeteksi" />Ya</td>
                                    <td><input type="radio" name="jawaban3" value="aman" />Tidak</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <h3 style="margin-top=1000px; margin-left:100px">4. Apakah anda pernah</h3>
                        <br>
                        <ul style="margin-top=1000px; margin-left:100px">
                            <li>muncul gejala
                                sekitar 14 hari setelah travelling ke luar negeri? <br>
                                (China, Italy, Iran, Korea Selatan, Prancis, Spanyol, Jerman, USA) atau ke kota
                                <br> terjangkit (Jakarta, Bali, Solo, Yogyakarta, Pontianak, Manado, Bandung dll)?</li>
                        </ul>
                        <br>

                        <table style="margin-top=1000px; margin-left:100px">
                            <thead>
                                <th width="100px"></th>
                                <th width="100px"></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="radio" name="jawaban4" value="terdeteksi" />Ya</td>
                                    <td><input type="radio" name="jawaban4" value="aman" />Tidak</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <h3 style="margin-top=1000px; margin-left:100px">5. Apakah Anda Melakukan Hal ini?</h3>
                        <br>
                        <ul style="margin-top=1000px; margin-left:100px">
                            <li>memberikan perawatan atau melakukan kontak dekat dengan seseorang <br> dengan COVID-19
                                (kemungkinan atau dikonfirmasi) saat mereka sakit <br> (batuk, demam, bersin, atau sakit
                                tenggorokan)</li>
                        </ul>
                        <br>

                        <table style="margin-top=1000px; margin-left:100px">
                            <thead>
                                <th width="100px"></th>
                                <th width="100px"></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="radio" name="jawaban5" value="terdeteksi" />Ya</td>
                                    <td><input type="radio" name="jawaban5" value="aman" />Tidak</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <h3 style="margin-top=1000px; margin-left:100px">6. Apakah Anda memiliki kontak dekat dengan
                        </h3>
                        <br>
                        <ul style="margin-top=1000px; margin-left:100px">
                            <li>seseorang yang bepergian ke luar Negeri dalam 14 hari terakhir <br> yang menjadi sakit
                                (batuk,
                                demam, bersin, atau sakit tenggorokan)?</li>
                        </ul>
                        <br>

                        <table style="margin-top=1000px; margin-left:100px">
                            <thead>
                                <th width="100px"></th>
                                <th width="100px"></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="radio" name="jawaban6" value="terdeteksi" />Ya</td>
                                    <td><input type="radio" name="jawaban6" value="aman" />Tidak</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <button style="margin-top=1000px; margin-left:205px" class="btn btn-danger" type="submit" name="jawab"
            value="Jawab">
            Kirim
        </button>
    </form>
    <!--===============================================================================================-->
    <script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="../vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="../vendor/bootstrap/js/popper.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="../vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="../vendor/daterangepicker/moment.min.js"></script>
    <script src="../vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="../vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="../js/main.js"></script>
</body>

</html>

<?php 
if(@$_POST ['jawab']){
    $namalengkap= @$_POST['namalengkap'];
    $jeniskelamin= @$_POST['jeniskelamin'];
    $usia= @$_POST['usia'];
    $alamat= @$_POST['alamat'];
    $telp= @$_POST['telp'];
    $suhu= @$_POST['suhu'];
    $jawaban1= @$_POST['jawaban1'];
    $jawaban2= @$_POST['jawaban2'];
    $jawaban3= @$_POST['jawaban3'];
    $jawaban4= @$_POST['jawaban4'];
    $jawaban5= @$_POST['jawaban5'];
    $jawaban6= @$_POST['jawaban6'];

//    $query= mysqli_query($koneksi, "INSERT INTO kondisi (nama, jeniskelamin, usia, alamat, telp, suhu, jawaban1, jawaban2, jawaban3,jawaban4, jawaban5, jawaban6)
//                             VALUES ('$namalengkap','$jeniskelamin','$usia','$alamat','$telp', '$suhu','$jawaban1','$jawaban2','$jawaban3','$jawaban4','$jawaban5','$jawaban6')");

    if($_POST['suhu']>36){
        include 'terdeteksi.php';
        $hasildetek="terdeteksi";
        $terdeteksi= mysqli_query($koneksi, "INSERT INTO kondisi (nama, jeniskelamin, usia, alamat, telp, suhu, jawaban1, jawaban2, jawaban3,jawaban4, jawaban5, jawaban6, hasil)
        VALUES ('$namalengkap','$jeniskelamin','$usia','$alamat','$telp', '$suhu','$jawaban1','$jawaban2',
        '$jawaban3','$jawaban4','$jawaban5','$jawaban6','$hasildetek')");
    }else if($_POST['suhu']<=36){
        include 'aman.php';
        $hasilaman="aman";
        $terdeteksi= mysqli_query($koneksi, "INSERT INTO kondisi (nama, jeniskelamin, usia, alamat, telp, suhu, jawaban1, jawaban2, jawaban3,jawaban4, jawaban5, jawaban6, hasil)
        VALUES ('$namalengkap','$jeniskelamin','$usia','$alamat','$telp', '$suhu','$jawaban1','$jawaban2','$jawaban3','$jawaban4','$jawaban5','$jawaban6','$hasilaman')");
    }
    else{
        echo "data gagal diinput";
    }
}
// $sql = "SELECT * FROM user INNER JOIN jawaban
// ON user.id = jawaban.id";
// $res = mysqli_query($koneksi, $sql);
// $data = mysqli_fetch_assoc($res);

// function ambilAnggota($koneksi)
// {
//     $sql = "SELECT id FROM user";
//     $res = mysqli_query($koneksi, $sql);

//     $data_anggota = array();

//     while($data = mysqli_fetch_assoc($res))
//     {
//         $data_anggota[] = $data;
//     }
//     return $data_anggota;
// }
//  if (@$_POST['jawab']=="Jawab") {
//     $jawaban    =$_POST['jawaban'];
//     $user = ambilAnggota($koneksi);
//     $insert =mysqli_query($koneksi,"INSERT INTO `jawaban` (id,jawaban1) VALUES ('$user','$jawaban')");
//         if($insert){
//             if($data['jawaban']=="ya"){
//                 header("location:../connect.php");
//             }
//         }
//         else if($data['jawaban']=="tidak"){
//             header("location:../connect.php");
//         }
//         else{
//             header("location:jj.php");
//         }
//     }
?>
