<?php
    include('../connect.php');
    
    if(isset($_POST['submit'])){
    $nama           = @$_POST['nama'];
    $usia           = @$_POST['usia'];
    $alamat         = @$_POST['alamat'];
    $telp      		= @$_POST['telp'];
    $username       = @$_POST['username'];
    $password       = @$_POST['password'];
    $level          =@$_POST['level'];
        
        $cek = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'") or die(mysqli_error($koneksi));
        
        if(mysqli_num_rows($cek) == 0){
            $sql = mysqli_query($koneksi, "INSERT INTO user (nama, usia , alamat , telp, username, password, id_level) 
            VALUES('$nama', '$usia', '$alamat', '$telp', '$username','$password','$level')") or die(mysqli_error($koneksi));
            
            if($sql){
                echo '<script>alert("Berhasil menambahkan data."); document.location="datauser.php";</script>';
            }else{
                echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
            }
        }else{
            echo '<div class="alert alert-warning">Gagal, username sudah terdaftar.</div>';
        }
    }
?>