<?php
    include "koneksi.php";

    if (!$koneksi) {
        die("koneksi gagal".mysqli_connect_error());
    }
    echo "koneksi sukses";

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $age = $_POST['age'];
    $birth_date = $_POST['birth-date'];
    $phone = $_POST['phone'];

    $sql = "insert into user values (NULL, '$username', '$email', '$password', '$age', '$birth_date', '$phone', '')";

    if (mysqli_query($koneksi, $sql)) {
        # code...
        echo "data berhasil ditambahkan";
    }else {
        echo "gagal";
    }

    mysqli_close($koneksi);
    header('location:index.html');
?>