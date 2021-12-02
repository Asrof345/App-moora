<?php
    $con = mysqli_connect("localhost", "id14621880_mooradb", "Mooraa#$09*123", "id14621880_moora");

    //check connection
    if(mysqli_connect_errno()){
        echo "Koneksi gagal :  " . mysqli_connect_error();
    }
?>