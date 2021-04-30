<?php
	include('../connect.php');
	$id = @$_GET['id'];
	$sql = mysqli_query($koneksi, "DELETE FROM user WHERE id='$id'");
	header('location:datauser.php');

?>