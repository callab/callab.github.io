<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>The Communication and Learning Lab</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Open Sans-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="vendor/bootstrap-select/css/bootstrap-select.min.css">
    <!-- owl carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <link href="css/bibtexbrowser.css" rel="stylesheet">
    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div id="all">
      <!-- Top bar-->
      <div class="top-bar">

      </div>
      <!-- Top bar end-->

      <!-- Navbar Start-->
      <header class="nav-holder make-sticky">
        <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
          <div class="container"><a href="index.html" class="navbar-brand home"><img src="img/logo.png" alt="Universal logo" class="d-none d-md-inline-block" style="width:187px;height:42px;"><img src="img/logo-small.png" alt="Universal logo" class="d-inline-block d-md-none" style="width:110px;height:47px;"><span class="sr-only">Universal - go to homepage</span></a>
            <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <div id="navigation" class="navbar-collapse collapse">
              <ul class="nav navbar-nav ml-auto">

                <li class="nav-item dropdown menu-large"><a href="index.html" >Home <b class="caret"></b></a> </li>

                <li class="nav-item dropdown menu-large"><a href="members.html">Lab Members <b class="caret"></b></a> </li>

                <li class="nav-item dropdown menu-large"><a href="contact.html">Contact Us<b class="caret"></b></a> </li>

                <li class="nav-item dropdown menu-large" id = "selected"><a href="publications.php?bib=citations.bib&all">Publications<b class="caret"></b></a> </li>

                <li class="nav-item dropdown menu-large"><a href="https://github.com/callab/"><b class="fa fa-github" style="font-size:1.3em;"></b></a> </li>


              </ul>
            </div>

          </div>
        </div>
      </header>
      <!-- Navbar End-->

  <section class="pubs" id="pubs">
    <div id="content">
      <div class="container">
        <section class="bar no-mb">
          <div class="container">
            <div class="col-md-12">
              <div class="heading">
                <h2>Publications
              </div>
              <a href="publications.php?all&bib=citations.bib">[all publications]</a>
              <a href="publications.php?type=article&bib=citations.bib">[refereed journal articles only]</a></h>
          <br>
          <br>
          <?php include 'bibtexbrowser.php';?>
        </div>
      </div>
    </div>
  </div>
  </section>

  <!-- FOOTER -->
  <footer class="main-footer">
    <div class="copyrights">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 text-center-md">
            <p>&copy; 2019. Dan Yurovsky / Communication and Learning Lab</p>
          </div>
          <div class="col-lg-8 text-right text-center-md">
            <p>Template design by <a href="https://bootstrapious.com/p/big-bootstrap-tutorial">Bootstrapious </a> & <a href="https://fity.cz/ostrava">Fity</a></p>
            <!-- Please do not remove the backlink to us unless you purchase the Attribution-free License at https://bootstrapious.com/donate. Thank you. -->
          </div>
        </div>
      </div>
    </div>
  </footer>

<!-- Javascript files-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper.js/umd/popper.min.js"> </script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
<script src="vendor/waypoints/lib/jquery.waypoints.min.js"> </script>
<script src="vendor/jquery.counterup/jquery.counterup.min.js"> </script>
<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="vendor/jquery.scrollto/jquery.scrollTo.min.js"></script>
<script src="js/front.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
<script src="js/gmaps.js"></script>
<script src="js/gmaps.init.js"></script>
</body>
</html>
