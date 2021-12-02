<?php
    include "config/koneksi.php";

    $id_alternatif = $_GET['id_alternatif'];

    $sql= "DELETE FROM tbl_data_alternatif WHERE id_data_alter='$id_alternatif' ";
    if(mysqli_query($con, $sql)){
        header("location:data-alternatif.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
?>