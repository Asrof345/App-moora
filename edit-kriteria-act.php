<?php
    include "config/koneksi.php";
    $id_kriteria    = $_GET['kriteria-id'];
    $kode_kriteria  = $_GET['kriteria-code'];
    $nama_kriteria  = $_GET['kriteria-name'];
    $nilai          = $_GET['score'];

    // $ketentuan      = $_GET['fixity'];

        $sql = "UPDATE tbl_kriteria SET kode_kriteria='$kode_kriteria', nama_kriteria='$nama_kriteria', nilai='$nilai' WHERE id='$id_kriteria'";
        if(mysqli_query($con, $sql)){
            header("location:data-kriteria.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
    mysqli_close($con);
?>