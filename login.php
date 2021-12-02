<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="" />
        <meta name="author" content="Dashboard" />
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina" />
        <title>Silahkan Login</title>
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
    </head>
    <body>
        <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
        <div id="login-page">
            <?php include "title-login.php"; ?>
            <div class="container"> 
                <div class="flex-login">
                    <div>
                        <form class="form-login" action="config/cek-login.php" method="POST">
                            <h2 class="form-login-heading">Silahkan Login</h2>
                            <div class="login-wrap">
                                <input type="text" name="username" class="form-control" placeholder="Username" required autofocus />
                                <div style="height: 3rem;"></div>
                                <input type="password" name="password" class="form-control" placeholder="Password" required />
                                <br />
                                <br />
                                <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> Login</button>
                                <div style="height: 2rem;"></div>
                                <!-- <a href="change-pwd.php" class="btn btn-theme btn-block"> <i class="fa fa-lock"></i> Ganti Password </a> -->
                                <!-- <a data-toggle="modal" class="btn btn-theme btn-block" href="login.php#myModal"> <i class="fa fa-lock"></i> Ganti Password </a> -->
                            </div>
                        </form>
                    </div>
                    <div class="bg-login"></div>
                </div>
                <!-- Modal -->
                <!-- <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Ganti Password ?</h4>
                            </div>
                            <form action="change-pwd.php" method="POST">
                              <div class="modal-body">
                                  <p>Masukkan Username kamu untuk mengubah password.</p>
                                    <input type="text" name="username" placeholder="username" autocomplete="off" class="form-control placeholder-no-fix" />
                              </div>
                              <div class="modal-footer">
                                  <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                                  <button class="btn btn-theme" type="submit">Submit</button>
                              </div>
                            </form>

                        </div>
                    </div>
                </div> -->
                <!-- modal -->
            </div>
        </div>
        <!-- js placed at the end of the document so the pages load faster -->
        <script src="lib/jquery/jquery.min.js"></script>
        <script src="lib/bootstrap/js/bootstrap.min.js"></script>
        <!--BACKSTRETCH-->
        <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
        <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
    </body>
</html>
