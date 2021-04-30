<?php
	include('../connect.php');
	
	$id = @$_GET['id'];
	$nama          = @$_POST['nama'];
    $usia          = @$_POST['usia'];
    $alamat          = @$_POST['alamat'];
    $telp      		= @$_POST['telp'];
    $username             = @$_POST['username'];
    $password           = @$_POST['password'];
    $level=@$_POST['level'];
	
	$sql = mysqli_query($koneksi,"UPDATE user SET nama='$nama', 
    usia='$usia', alamat='$alamat', telp='$telp', username='$username', password='$password', id_level='$level' where id='$id'");
    if($sql){
        echo '<script>alert("Berhasil menyimpan data."); document.location="datapetugas.php?id='.$id.'";</script>';
    }else{
        echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
    }

?>