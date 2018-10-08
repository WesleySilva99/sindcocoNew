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
        <h4><i class="fa fa-angle-right"></i> Eventos.</h4>
        <br>
     <div class="container">
  <div class="row">
    <div class='list-group gallery'>
        <?php

                $sql = "SELECT ei.id, ei.id_evento, ei.imagem, e.titulo FROM eventos AS e, imagem_evento AS ei WHERE e.id = ei.id_evento and ei.ativo = 1";
                $query = $conexao->query($sql);
                foreach ($query as $linha) {
            ?>
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                  <div class="imagemEvento">
                    <img style="width: 500px;" class="img-responsive" alt="" src="/img/eventos/<?=$linha['imagem'];?>"/>

                    <div >
                      <a href="" class="btn-card" style="background-color: #e14c25; padding-bottom: 5px;">Inativar Imagem</a>
                        <small class='text-muted' ><?=$linha["titulo"];?></small>
                    </div> <!-- text-right / end -->
                </div>
            </div> <!-- col-6 / end -->
           <?php
                }
            ?>

        </div> <!-- list-group / end -->
  </div> <!-- row / end -->
</div> <!-- container / end -->
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer" style="margin-top: 20%;">
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

