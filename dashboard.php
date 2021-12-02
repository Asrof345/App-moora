<?php
    include "config/session.php";
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="" />
        <meta name="author" content="Dashboard" />
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina" />
        <title>Beranda</title>

        <!-- Favicons -->
        <link href="img/favicon.png" rel="icon" />
        <link href="img/apple-touch-icon.png" rel="apple-touch-icon" />

        <!-- Bootstrap core CSS -->
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <!--external css-->
        <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css" />
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
                    <h4 style="color: #fff;">Beranda</h4>
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
                    <h2>Selamat datang, admin</h2>
                    <?php include "panels.php" ; ?>
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
        <script src="lib/jquery.sparkline.js"></script>
        <!--common script for all pages-->
        <script src="lib/common-scripts.js"></script>
        <!--script for this page-->
        <script src="lib/sparkline-chart.js"></script>
        <script src="lib/zabuto_calendar.js"></script>
    </body>
</html>