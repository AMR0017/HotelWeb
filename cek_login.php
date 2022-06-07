<?php
    session_start();

    include 'koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = mysqli_query($koneksi, "select * from user where username='$username' and password='$password'");

    $cek = mysqli_num_rows($login);

    if ($cek > 0) {
        # code...
        $data = mysqli_fetch_assoc($login);

        if ($data['level']=="admin") {
            # code...
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "admin";

            header("location:admin.php");
        }
        else {
            # code...
            header("location:book.html");
        }
    }else {
        # code...
        echo "data tidak ada";
    }
?>