<?php
    include "config/session.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "meta-data.php" ; ?>
        <title>Perhitungan</title>

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
                    <h4 style="color: #fff;">Perhitungan Moora</h4>
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
                    <h2><i class="fa fa-angle-right"></i> Perhitungan Moora</h2>
                    <?php include "table-normalisasi.php" ; ?>
                    <?php include "kalkulasi.php" ;?>
                </section>
            </section>
            <!--main content end-->
        </section>
        <?php include "js-bundle-data.php"; ?>
    </body>
</html>
