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
        <h4><i class="fa fa-angle-right"></i> Anuncios a serem aceitos.</h4>
      <?php

        if($_GET["msg"] != null){

      ?>

        <h3><?=$_GET["msg"];?></h3>

        <?php } ?>

        <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col"><i class="fa fa-picture-o" ></i>Imagem</th>
                <th scope="col"><i class=" fa fa-edit"></i>Titulo</th>
                <th scope="col"><i class="fa fa-calendar"></i>Data</th>
                <th scope="col"><i class="fa fa-question-circle"></i>Descrição</th>
                <th><i class="fa fa-usd" aria-hidden="true"></i> Preço</th>
                <th><i class="fa fa-user" aria-hidden="true"></i> Nome</th>
                <th><i class="fa fa-envelope" aria-hidden="true"></i> E-mail</th>
                <th scope="col"><i class=" fa fa-phone"></i>Telefone</th>
                <th scope="col"><i class="fa fa-question-circle"></i>Situação</th>
                <th scope="col">Ações</th>
            </tr>
            <?php

                $sql = "SELECT * FROM anuncio WHERE autorizado = 0 ORDER BY data DESC";
                $query = $conexao->query($sql);
        foreach ($query as $linha) {
            ?>

            <tr>
                <?php
          if($linha["imagem"] != null){
        ?>
          <td style="width: 10%"><img src="/img/anuncios/<?=$linha['imagem'];?>"  class="img-thumbnail"/></td>
        <?php
          }else {
        ?>
          <td style="width: 10%"><img src="/img/anuncios/off.jpg" class="img-thumbnail"/></td>
        <?php
          }
        ?>
                <td style="width: 5%"scope="col"><?=$linha["titulo"];?></td>
                <td style="width: 5%"scope="col"><?=date('d/m/Y', strtotime($linha['data']));?></td>
                <td style="width: 20%" scope="col"><?=$linha["descricao"];?></td>
                 <td style="width: 5%" scope="col"><?=$linha["preco"];?></td>
                  <td style="width: 5%" scope="col"><?=$linha["nome"];?></td>
                   <td style="width: 2%" scope="col"><?=$linha["email"];?></td>
                    <td style="width: 5%" scope="col"><?=$linha["fone"];?></td>
                <td><span class="label label-warning label-mini">Pendente</span></td>
                <td>
                     <a href="/admin/classificados/sim.php?id=<?=$linha['id']?>"> <button  class="btn btn-primary btn-xs"><i class="fa fa-check"></i></button> </a>
                      
                    <a href="/admin/classificados/deletar.php?id=<?=$linha['id']?>">  <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button> </a>
                    </td>
               
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
