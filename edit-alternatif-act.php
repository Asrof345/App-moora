<?php
    include "config/koneksi.php";

    $id_alternatif = $_GET['alternatif-id'];
    $lokasi        = $_GET['location'];
    $jarak_kantor  = $_GET['office-distance'];
    $jarak_sekolah = $_GET['sch-distance'];
    $luas          = $_GET['large'];
    $biaya         = $_GET['cost'];
    $kepadatan     = $_GET['intensiveness'];


    $sql = "UPDATE tbl_data_alternatif SET lokasi='$lokasi', jarak_kantor='$jarak_kantor', jarak_sekolah='$jarak_sekolah', luas='$luas', biaya='$biaya', kepadatan='$kepadatan' WHERE id_data_alter='$id_alternatif'";
    if(mysqli_query($con, $sql)){
        header("location:data-alternatif.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
mysqli_close($con);

?>