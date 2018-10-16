<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Noticias do SINDCOCO</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<?php
		
            require("../util/imports.php");
            require("../util/conexao.php");
		?>
		<!-- fav icon -->

			<link rel="shortcut icon" type="image/png" href="/img/logoMini.png"/>

    </head>
    <body class="blog">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
		<!-- Header Start -->
		<header>
			
			<?php

				include("nav.php");

			?>
		

		
		
		
		<section class="blog-single cardn1"  >
             <?php

                $sql = "SELECT * FROM noticias WHERE id = ?";

                $stmt = $conexao->prepare($sql);
                $stmt->bindValue(1, $_GET['id']);

                $stmt->execute();

                foreach ($stmt as $linha) { 

            ?>

<!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

          <!-- Title -->
          <h1 class="mt-4"><?=$linha['titulo'];?></h1>

          <!-- Author -->
          <p class="lead">
            Fonte:
            <a href="#"><?=$linha['fonte'];?></a>
          </p>

          <hr>

          <!-- Date/Time -->
          <p>Postado em <?=$linha['data'];?></p>

          <hr>

          <!-- Preview Image -->
          <img class="img-fluid rounded" src="/img/noticias/<?=$linha['imagem'];?>" alt="">

          <hr>

          <!-- Post Content -->
          

          
 
          <?php

                                    if($linha['arquivo'] == null){
                                ?>
                                    <!-- Texto da noticia -->

                                    <p><?=$linha['texto'];?></p>
                                    <!-- Fim Texto da noticia -->
                                <?php

                                    }else{

                                ?>

                                    <!-- Arquivo da noticia -->
                                    <center></center>
                                        <a href="/noticias/arquivos/<?=$linha['arquivo'];?>" class="btn btn-read-more" target="_blank"> Clique aqui para ver o arquivo >> </a>
                                    <!-- Fim Arquivo da noticia -->
                                <?php

                                    }

                                ?>

         
        </div>

        <?php
        }
        ?>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

         <aside class="right-sidebar">
                            <div class="widget">
                                <form class="form-search">
                                    <input class="form-control" type="text" placeholder="Search..">
                                </form>
                            </div>
                            <div class="widget">

                                <h4 class="widgetheading">Saiba mais</h4>
                                <ul class="cat">
                                    <li><i class="icon-angle-right"></i><a href="/noticias/informativos.php" class="btn  btn-sm">Informativos</a></li>
                                    <li><i class="icon-angle-right"></i><a href="/noticias/teste.php" class="btn  btn-sm">Notícias</a></li>
                                    <li><i class="icon-angle-right"></i><a href="/noticias/midia.php" class="btn  btn-sm">Sindcoco na mídia</a></li>
                                </ul>
                            </div>

                           
                            <!-- Informativos -->
                            <div class="widget">
                                <h4 class="widgetheading" >Informativos</h4>
                                <ul class="recent">
                                    <?php

                                        require("../util/conexao.php");
                                        $sql = "SELECT * FROM informativos WHERE autorizado = 1 ORDER BY id DESC LIMIT 3";
                                        $anuncios = $conexao->query($sql);
                                        foreach ($anuncios as $linha) {

                                    ?>
                                        <li>
                                            <center>
                                                <i class="fa fa-file-pdf-o" style="font-size:48px;color: #337ab7"></i>
                                            </center>
                                            <h6><?=$linha["titulo"];?></h6>
                                                <p></p>
                                                <center>
                                                    <a href="/pdf/informativos/<?=$linha['arquivo'];?>" class="btn btn-read-more" target="_blank" style="background: #37b49c; color: white;">
                                                        Ler mais <span class="glyphicon glyphicon-chevron-right"></span><span class="glyphicon glyphicon-chevron-right"></span>
                                                    </a>
                                                </center>
                                        </li>
                                    <?php
                                        }
                                    ?>
                                    
                                </ul>
          </div>

          

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

           
		</section>
		
		
		<!-- Footer -->
        <?php

            require("footer.php");

        ?>
        
		
		
		

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="../js/plugins.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
