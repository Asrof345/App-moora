<?php

    include "config/session.php";

?>

<!DOCTYPE html>

<html lang="en">

    <head>

        <?php include "meta-data.php" ; ?>

        <title>Data Alternatif</title>



        <!-- Favicons -->

        <link href="img/favicon.png" rel="icon" />

        <link href="img/apple-touch-icon.png" rel="apple-touch-icon" />



        <!-- Bootstrap core CSS -->

        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

        <!--external css-->

        <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />

        <link href="lib/advanced-datatable/css/demo_page.css" rel="stylesheet" />

        <link href="lib/advanced-datatable/css/demo_table.css" rel="stylesheet" />

        <link rel="stylesheet" href="lib/advanced-datatable/css/DT_bootstrap.css" />

        <!-- Custom styles for this template -->

        <link href="css/style.css" rel="stylesheet" />

        <link href="css/style-responsive.css" rel="stylesheet" />

        <script src="lib/chart-master/Chart.js"></script>

    </head>



    <body>

        <section id="container">

            <!-- **********************************************************************************************************************************************************

        TOP BAR CONTENT & NOTIFICATIONS

        *********************************************************************************************************************************************************** -->

            <!--header start-->

            <header class="header black-bg">

                <div class="sidebar-toggle-box">

                    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>

                </div>

                <!--logo start-->

                <a href="dashboard.php" class="logo">

                    <b>MOO<span>RA</span></b>

                </a>

                <!--logo end-->

                <div class="nav notify-row" id="top_menu">

                    <h4 style="color: #fff;">Data</h4>

                </div>

                <?php include "header.php"; ?>

            </header>

            <!--header end-->

            <!-- **********************************************************************************************************************************************************

        MAIN SIDEBAR MENU

        *********************************************************************************************************************************************************** -->

            <!--sidebar start-->

            <?php include "sidemenu.php" ; ?>

            <!--sidebar end-->

            <!-- **********************************************************************************************************************************************************

        MAIN CONTENT

        *********************************************************************************************************************************************************** -->

            <!--main content start-->

            <section id="main-content">

                <section class="wrapper">

                    <h2><i class="fa fa-angle-right"></i> Data Alternatif</h2>

                    <span style="float: left; margin: 2rem 0; font-size: 1.5rem; font-weight: bold;">

                        Tabel data alternatif<br>

                        <span id="infoNilai" style="color:red;"></span>

                    </span>

                    <div>

                        <span style="float: right; margin: 2rem 0;">

                            



                            <div style="max-height:10px; overflow: hidden;"> 

                                <?php

                                    include "config/koneksi.php";

                                    $lokasii = 0 ;

                                    $j1 = 0;

                                    $j2 = 0;

                                    $j3 = 0;

                                    $j4 = 0;

                                    $j5 = 0;

                                    $sql = mysqli_query($con, "SELECT * FROM tbl_data_alternatif");

                                    $count_data = mysqli_num_rows($sql);

                                    while ($r = mysqli_fetch_array($sql)){

                                        $lokasi         = $r['lokasi'];

                                        $jarak_kantor   = $r['jarak_kantor'];

                                        $jarak_sekolah  = $r['jarak_sekolah']; 

                                        $luas           = $r['luas'];

                                        $biaya          = $r['biaya'];

                                        $kepadatan      = $r['kepadatan'];

                                ?> 

                                <form action="add-normalisasi-act.php" method="post">

                                    <input type="hidden" name="lokasi<?php echo $lokasii++; ?>" value="<?php echo $lokasi; ?>">

                                        <?php 

                                            if($jarak_kantor <= 100){

                                                $jarak_kantor = 5;

                                            } elseif($jarak_kantor <= 200){

                                                $jarak_kantor = 4;

                                            }  elseif($jarak_kantor <= 300){

                                                $jarak_kantor = 3;

                                            } elseif ($jarak_kantor <= 400) {

                                                $jarak_kantor = 2;

                                            } else{

                                                $jarak_kantor = 1;

                                            }

                                        ?>

                                    <input type="hidden" name="j1<?php echo $j1++; ?>" value="<?php echo $jarak_kantor; ?>">

                                        <?php 

                                            if($jarak_sekolah <=1000){

                                                $jarak_sekolah = 5;

                                            } elseif ($jarak_sekolah <= 2000) {

                                                $jarak_sekolah = 4 ;

                                            } elseif ($jarak_sekolah <= 3000) {

                                                $jarak_sekolah = 3;

                                            } elseif ($jarak_sekolah <= 4000){

                                                $jarak_sekolah = 2;

                                            } else{

                                                $jarak_sekolah = 1;

                                            }

                                        ?>

                                    <input type="hidden" name="j2<?php echo $j2++; ?>" value="<?php echo $jarak_sekolah; ?>">

                                        <?php 

                                            if($luas <= 50){

                                                $luas = 1 ;

                                            } elseif ($luas <= 80) {

                                                $luas = 2 ;

                                            } elseif ($luas <= 100) {

                                                $luas = 3 ;

                                            } elseif ($luas <= 150) {

                                                $luas = 4 ;

                                            } else {

                                                $luas = 5 ;

                                            }

                                        ?>

                                    <input type="hidden" name="j3<?php echo $j3++; ?>" value="<?php echo $luas; ?>">

                                        <?php 

                                            if($biaya <= 50){

                                                $biaya = 5 ;

                                            } elseif ($biaya <= 100) {

                                                $biaya = 4 ;

                                            } elseif ($biaya <= 250) {

                                                $biaya = 3 ;

                                            } elseif ($biaya <= 400) {

                                                $biaya = 2;

                                            } else{

                                                $biaya = 1;

                                            }

                                        ?>

                                    <input type="hidden" name="j4<?php echo $j4++; ?>" value="<?php echo $biaya ; ?>">

                                        <?php 

                                            if($kepadatan <= 900){

                                                $kepadatan = 1 ;

                                            } elseif ($kepadatan <= 2000) {

                                                $kepadatan = 2 ;

                                            } elseif ($kepadatan <= 4000) {

                                                $kepadatan = 3 ;

                                            } elseif ($kepadatan <= 6000) {

                                                $kepadatan = 4 ;

                                            }else{

                                                $kepadatan = 5 ;

                                            }

                                        ?>

                                    <input type="hidden" name="j5<?php echo $j5++; ?>" value="<?php echo $kepadatan; ?>">

                                    <?php } ?>

                                    <input type="hidden" name="count-data" value=<?php echo $count_data; ?>>

                                    </div>

                                    <div style="margin-bottom:1.2rem;">

                                    <?php

                                            error_reporting(0);

                                            $max = 100;

                                            $sql = mysqli_query($con, "SELECT * FROM tbl_kriteria");

                                            while ($r = mysqli_fetch_array($sql)){

                                            $nilai_kriteria += $r['nilai'];

                                            }

                                    ?>
                                    <?php
                                            $sisa = $max - $nilai_kriteria ;
                                    ?>

                                        <span id="sisaNilai" style="display:none"> <?php echo $sisa ; ?> </span>
                                        <button class="btn btn-success" id="btnSubmitNormalisasi" type="submit">
                                            <i class="fa fa-wrench"></i> Normalisasikan Tabel
                                        </button>
                                    </div>
                                </form>
                                <button class="btn btn-default btn-block" data-toggle="modal" data-target="#ModalTambahAlternatif">
                                <i class="fa fa-plus-square"></i> Tambah
                            </button>

                        </span>

                        <?php include "modal-tambah-data-alternatif.php" ;?>

                    </div>

                    <?php include "table-data-alternatif.php" ; ?>

                    <?php include "modal-edit-data-alternatif.php" ; ?>

                    <?php include "modal-delete-alternatif.php"; ?>

                </section>

            </section>

            <!--main content end-->

        </section>

        <?php include "js-bundle-data.php"; ?>

        <script type="text/javascript">

            var sisaNilai = document.getElementById("sisaNilai").innerHTML ;

            if(sisaNilai==0){

                document.getElementById("btnSubmitNormalisasi").disabled = false;

            } else {

                document.getElementById("btnSubmitNormalisasi").disabled = true;

                document.getElementById("infoNilai").innerHTML = "Total Nilai kriteria kurang dari 100%,<br>tidak dapat menormalisasikan data";

            }

        </script>

    </body>

</html>

