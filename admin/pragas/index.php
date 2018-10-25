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
  <title>Pragas</title>

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
        <h4><i class="fa fa-angle-right"></i>Pragas Cadastradas</h4>
        <?php

        if($_GET["msg"] != null){

      ?>

        <h3><?=$_GET["msg"];?></h3>

        <?php } ?>

        <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col"><i class="fa fa-calendar" ></i>id</th>
                <th scope="col"><i class="fa fa-picture-o" ></i>Imagem</th>
                <th scope="col"><i class=" fa fa-edit"></i>Nome</th>
                <th scope="col"><i class="fa fa-picture-o" ></i>Nome Científico</th>
                <th scope="col"><i class="fa fa-calendar" aria-hidden="true"></i>Ações</th>
                
            </tr>
            <?php

                $sql = "SELECT * FROM pragas WHERE aceito = 1 ORDER BY nome";
                $query = $conexao->query($sql);
                foreach ($query as $linha) {
            ?>

            <tr>
                <td style="width: 5%"scope="col"><?=$linha["id"];?></td>
                <?php
                  if($linha["imagem"] != null){
                ?>
                  <td style="max-width: 100px;"><img src="/img/pragas/<?=$linha['imagem'];?>"  class="img-thumbnail"/></td>
                <?php
                  }else {
                ?>
                  <td style="max-width: 100px;"><img src="/img/anuncios/off.jpg" class="img-thumbnail"/></td>
                <?php
                  }
                ?>

                <td style="width: 20%" scope="col"><?=$linha["nome"];?></td>
                <td style="width: 5%" scope="col"><?=$linha["nome_cientifico"];?></td>
                <td>      
                    <a href="/admin/pragas/nao.php?id=<?=$linha['id']?>">  
                      <button class="btn btn-danger btn-xs">
                        <i class="fa fa-trash-o "></i>
                        Inativar
                      </button> 
                    </a>
                    <a href="/admin/pragas/cadastrarDescricao.php?id=<?=$linha['id']?>">  
                      <button class="btn btn-success btn-xs">
                        Adicionar Descrição
                      </button> 
                    </a>
                    <a href="/admin/pragas/cadastrarPlanta.php?id=<?=$linha['id']?>">  
                      <button class="btn btn-success btn-xs">
                        Adicionar Planta Hospedeira
                      </button> 
                    </a> <br>
                    <a href="/admin/pragas/cadastrarDistribuicao.php?id=<?=$linha['id']?>">  
                      <button class="btn btn-success btn-xs">
                        Adicionar Distribuição Geográfica
                      </button> 
                    </a>
                    
                    <a href="/admin/pragas/cadastrarDanos.php?id=<?=$linha['id']?>">  
                      <button class="btn btn-success btn-xs">
                        Adicionar Danos
                      </button> 
                    </a> <br>
                   
                    <a href="/admin/pragas/cadastrarAmostragem.php?id=<?=$linha['id']?>">  
                      <button class="btn btn-success btn-xs">
                        Adicionar Amostragem
                      </button> 
                    </a>
                    <a href="/admin/pragas/cadastrarTatica.php?id=<?=$linha['id']?>">  
                      <button class="btn btn-success btn-xs">
                        Adicionar Tática de Controle
                      </button> 
                    </a>
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