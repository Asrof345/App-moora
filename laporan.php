<?php
    include "config/session.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "meta-data.php" ; ?>
        <title>Laporan</title>

        <!-- Favicons -->
        <link href="img/favicon.png" rel="icon" />
        <link href="img/apple-touch-icon.png" rel="apple-touch-icon" />

        <!-- Bootstrap core CSS -->
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <!--external css-->
        <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
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
                    <h4 style="color: #fff;">Laporan</h4>
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
                    <h2><i class="fa fa-angle-right"></i> Laporan Perangkingan</h2>
                    
                    <?php include "table-rangking.php" ; ?>
                </section>
            </section>
            <!--main content end-->
        </section>
        <!-- js placed at the end of the document so the pages load faster -->
        <script src="lib/jquery/jquery.min.js"></script>
        <script src="lib/bootstrap/js/bootstrap.min.js"></script>
        <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
        <script src="lib/jquery.scrollTo.min.js"></script>
        <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
        <!--common script for all pages-->
        <script src="lib/common-scripts.js"></script>
        <!--script for this page-->
        
    </body>
</html>
