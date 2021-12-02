<?php

    session_start();

    include "koneksi.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = mysqli_query($con, "SELECT * FROM tbl_user WHERE username='$username' and password='$password'");

    $cek = mysqli_num_rows($login);

    if($cek > 0){

        $_SESSION['username'] = "Admin";

        header("location:../dashboard.php");

    }else{

        echo "<script>alert('Username dan Password salah');history.go(-1)</script>";

    }



?>