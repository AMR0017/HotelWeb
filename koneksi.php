<?php
    $server = "localhost";
    $user   = "root";
    $pass   = "321azhar";
    $database = "db_login";
    
    
    $koneksi = mysqli_connect($server,$user,$pass,$database);

    if (mysqli_connect_errno()) {
        # code...
        echo "Koneksi database gagal : ". mysqli_connect_errno();
    }
?>