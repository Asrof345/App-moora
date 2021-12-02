<?php
    include "config/koneksi.php";

    $lokasi         = $_POST['location'];
    $jarak_kantor   = $_POST['office-distance'];
    $jarak_sekolah  = $_POST['sch-distance'];
    $luas           = $_POST['large'];
    $biaya          = $_POST['cost'];
    $kepadatan      = $_POST['intensiveness'];

    $query = "INSERT INTO tbl_data_alternatif(lokasi,jarak_kantor,jarak_sekolah,luas,biaya,kepadatan)
                VALUES ('$lokasi','$jarak_kantor','$jarak_sekolah','$luas','$biaya','$kepadatan')";
    
    if(mysqli_query($con, $query)){
        header("location:data-alternatif.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
    mysqli_close($con);
?>