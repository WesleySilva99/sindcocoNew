<?php

    session_start();

    if(!isset($_SESSION["login"])){
        header("Location: /admin/index.php");
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Eventos</title>
<style type="text/css">
  .text_center {text-align: center;width: 100%;}
.img_polygon{position: relative;-webkit-transition: .6s all, .3s .3s -webkit-transform;transition: .6s all, .3s .3s transform;-webkit-clip-path: polygon(50% 0%, 50% 0%, 100% 50%, 50% 100%, 50% 100%, 0% 50%);clip-path: polygon(50% 0%, 50% 0%, 100% 50%, 50% 100%, 50% 100%, 0% 50%);opacity: .8; -webkit-filter: grayscale(100%); filter: grayscale(100%);}
img {border: 0px;border-style: solid; -webkit-transform-origin: left top; -ms-transform-origin: left top; -o-transform-origin: left top;transform-origin: left top;}
.img_polygon:hover { -webkit-clip-path: polygon(0% 0%, 100% 0%, 100% 50%, 100% 100%, 0% 100%, 0% 50%); clip-path: polygon(0% 0%, 100% 0%, 100% 50%, 100% 100%, 0% 100%, 0% 50%); -webkit-transform: scale(1.4); -ms-transform: scale(1.4);transform: scale(1.4);z-index: 10;box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);border-radius: 0px;opacity: 1;transform-origin: center center; -webkit-filter: grayscale(0%);filter: grayscale(0%);}
.img_polygon:nth-child(1n + 5) { -webkit-transform: translateY(-50%); -ms-transform: translateY(-50%); transform: translateY(-50%);}
.img_polygon:nth-child(1n + 5):hover {-webkit-transform: translateY(-50%) scale(1.4);-ms-transform: translateY(-50%) scale(1.4);transform: translateY(-50%) scale(1.4);}

</style>
  <!-- Favicons
  <link href="/admin/img/favicon.png" rel="icon">
  <link href="/admin/img/apple-touch-icon.png" rel="apple-touch-icon">
-->
    <?php
		
			
			
        require("../imports.php");
        require("../../util/conexao.php");
       


    ?>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
     <?php

            require("../nav.php");

        ?>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
      <?php

            require("../navLateral.php");

        ?>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
     <h3><i class="fa fa-angle-right"></i> Gallery</h3>
        <hr>
        <div class="container">
      <div class="text_center">
            <img src="https://www.planwallpaper.com/static/images/2ba7dbaa96e79e4c81dd7808706d2bb7_large.jpeg" width="280" height="280" class="img_polygon">
            <img src="https://www.planwallpaper.com/static/images/6-940622110b39cad584098e6749eac708.jpg" width="280" height="280" class="img_polygon">
            <img src="https://www.planwallpaper.com/static/images/2ba7dbaa96e79e4c81dd7808706d2bb7_large.jpeg" width="280" height="280" class="img_polygon">
            <img src="https://www.planwallpaper.com/static/images/6-940622110b39cad584098e6749eac708.jpg" width="280" height="280" class="img_polygon">
            <img src="https://www.planwallpaper.com/static/images/2ba7dbaa96e79e4c81dd7808706d2bb7_large.jpeg" width="280" height="280" class="img_polygon">
            <img src="https://www.planwallpaper.com/static/images/2ba7dbaa96e79e4c81dd7808706d2bb7_large.jpeg" width="280" height="280" class="img_polygon">
            <img src="https://www.planwallpaper.com/static/images/2ba7dbaa96e79e4c81dd7808706d2bb7_large.jpeg" width="280" height="280" class="img_polygon">
        </div>
</div>
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  
</body>

</html>

