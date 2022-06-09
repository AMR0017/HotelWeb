<?php
    session_start();

    include 'koneksi.php';

    $email = $_POST['email'];

    $email = mysqli_query($koneksi, "select * from user where email='$email'");

    $cek = mysqli_num_rows($email);

    if ($cek > 0) {
        # code...
        $data = mysqli_fetch_assoc($email);

        if ($data['email']= $email) {
            # code...
            include "koneksi.php";

            if (!$koneksi) {
                die("koneksi gagal".mysqli_connect_error());
            }
            echo "koneksi sukses";
        
            $rtype = $_POST['Rtype'];
            $rstat = $_POST['Rstat'];
            $cidate = $_POST['CheckIn_date'];
            $codate = $_POST['CheckOut_date'];
            $duration = $_POST['numdays'];
            $mroom = $_POST['MRoom'];
            $email = $_POST['email'];
        
            $sql = "insert into reservation values (NULL, '$rtype', '$cidate', '$codate', '$duration', '$mroom', '$rstat', '$email')";
        
            if (mysqli_query($koneksi, $sql)) {
                # code...
                echo "data berhasil ditambahkan";
            }else {
                echo "gagal";
            }
        
            mysqli_close($koneksi);
            header('location:index.html');
        }
        else {
            # code...
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Masukkan Email yang Sesuai")';  
            echo '</script>';
        }
    }else {
        # code...
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Tidak ada Data ditemukan")';  
        echo '</script>';
    }
?>