<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Ganti Password</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  
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
            <form name="change-pwd" class="form-login" action="config/change-pwd-act.php" method="POST">
              <h2 class="form-login-heading">Ganti Password</h2>
              <div class="login-wrap">
                  <?php 
                    include "config/generate-username.php";
                  ?>
                <input type="hidden" name="username" value="<?php echo $username; ?>">
                <input type="password" name="old-pwd" class="form-control" placeholder="Masukkan Password Lama *" required autofocus>
                <div style="height:2.7rem;"> </div>
                <input type="password" name="new-pwd" class="form-control" placeholder="Masukkan Password Baru *" required>
                <div style="height:2.7rem;"> </div>
                <input type="password" name="new-pwd-confirm" class="form-control" placeholder="Ulangi Password Baru *" required>
                <br><br>
                <div style="height:2rem;"> </div>
                <button type="submit" class="btn btn-theme btn-block" href="change-pwd.php"><i class="fa fa-lock"></i> Ganti Password</button>
              </div>
            </form>
          </div>
            <div class="bg-login">
            </div>
        </div>
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
