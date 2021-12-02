<?php
include "config/koneksi.php";

mysqli_query($con, "DELETE FROM tbl_ranking");

$count_data = $_POST['count-data'];

for($i=0;$i<$count_data;$i++){
    $location = $_POST['lokasi'.$i];
    $yi_value = $_POST['nilai_yi'.$i];

    $query = "INSERT INTO tbl_ranking(lokasi,nilai_yi)
                VALUES('$location','$yi_value')";

    if(mysqli_query($con,$query)){
        header("location:laporan.php");
    }else {
        echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
}

mysqli_close($con);

?>