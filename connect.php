<?php
    $db_host= "127.0.0.1";
    $db_user= "root";
    $db_pass= "";
    $db_name= "covid19";
    $koneksi= mysqli_connect($db_host,$db_user,$db_pass, $db_name);
    
    // check connection

    // if(mysqli_connect_errno()){
    //     echo "koneksi database gagal" . mysqli_connect_errno();
    // }
    // else{
    //     echo "koneksi berhasil";
    // }

    ?>