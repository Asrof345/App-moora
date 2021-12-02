<?php
include "config/koneksi.php";

mysqli_query($con, "DELETE FROM tbl_normalisasi");

$count_data = $_POST['count-data'];

for($i=0;$i<$count_data;$i++){
    $lokasi = $_POST['lokasi'.$i];
    $j1     = $_POST['j1'.$i];
    $j2     = $_POST['j2'.$i];
    $j3     = $_POST['j3'.$i];
    $j4     = $_POST['j4'.$i];
    $j5     = $_POST['j5'.$i];


    $query = "INSERT INTO tbl_normalisasi(lokasi,j1,j2,j3,j4,j5)
                VALUES('$lokasi','$j1','$j2','$j3','$j4','$j5')";

    if(mysqli_query($con,$query)){
        header("location:perhitungan-moora.php");
    }else {
        echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
}

mysqli_close($con);

?>