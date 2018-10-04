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
      <?php

        if($_GET["msg"] != null){

      ?>

        <h3><?=$_GET["msg"];?></h3>

        <?php } ?>

        <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Capa</th>
                <th scope="col">Titulo</th>
                <th scope="col">Data</th>
                <th scope="col">Descrição</th>
                <th scope="col">Ações</th>
            </tr>
            <?php

                $sql = "SELECT * FROM eventos WHERE ativo = 0 ORDER BY data DESC";
                $query = $conexao->query($sql);
				foreach ($query as $linha) {
            ?>

            <tr>
                <?php
					if($linha["capa"] != null){
				?>
					<td><img src="/img/eventos/<?=$linha['capa'];?>"  class="img-thumbnail"/></td>
				<?php
					}else {
				?>
					<td><img src="/img/anuncios/off.jpg" class="img-thumbnail"/></td>
				<?php
					}
				?>
                <td scope="col"><?=$linha["titulo"];?></td>
                <td scope="col"><?=date('d/m/Y', strtotime($linha['data']));?></td>
                <td scope="col"><?=$linha["descricao"];?></td>
                <td scope="col">
                    <a href="/admin/eventos/reativarEvento.php?id=<?=$linha['id']?>">
                        <button class="btn btn-sm btn-success">
                            Reativar evento
                        </button>
                    </a><br>
                    <a href="/admin/eventos/inativarEvento.php?id=<?=$linha['id']?>">
                        <button class="btn btn-sm btn-danger">
                            Inativar Evento
                        </button>
                    </a>
                </th>
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
