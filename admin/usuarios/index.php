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
  <title>Noticias</title>

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
      <?php

        if($_GET["msg"] != null){

      ?>

        <h3><?=$_GET["msg"];?></h3>

        <?php } ?>

        <table class="table">
        <thead class="thead-dark">
            <tr>
                
                <th scope="col">Nome</th>
                <th scope="col">Login</th>
                <th scope="col">Adm</th>
                <th scope="col">Ações</th>
            </tr>
            <?php

                $sql = "SELECT * FROM usuario";
                $anuncios = $conexao->query($sql);
                foreach ($anuncios as $linha) {
            ?>

            <tr>
                <td scope="col"><?=$linha["nome"];?></td>
                <td scope="col"> <?=$linha["login"];?></td>
                <?php

                    if($linha["adm"] == 1){

                ?>
                <td scope="col">Sim</td>
                <?php
                    }else {

                ?>
                
                <td scope="col">Não</td>
                
                <?php } ?>
                <td>
                <td>
                    <a href="/admin/usuarios/editar.php?id=<?=$linha['id']?>">
                        <button class="btn btn-sm btn-warning">
                            Editar
                        </button>
                    </a>
                    <a href="/admin/usuarios/delete.php?id=<?=$linha['id']?>">
                        <button class="btn btn-sm btn-danger">
                            Deletar
                        </button>
                    </a>                   
                </td>
            </tr>

            <?php
                }
            ?>

        </table>
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
