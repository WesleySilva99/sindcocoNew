<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Sobre o SINDCOCO</title>
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

                         <div class="container" >
                            <h3 class="font-weight-light text-center my-3 cardn4" ><?=$linha['titulo'];?></h3>

                            <br>
                    
                            <div class="card-body cardn10" >
                                <!-- Imagem da noticia -->
                                <img src="/img/noticias/<?=$linha['imagem'];?>" alt="card-alt-img-text" class="card-img-top img-fluid cardn11" style="width: 40%; margin-left: 30%">
                                <!-- Fim Imagem da noticia -->

                                <!-- Fonte da noticia -->
                                <h1 style="width: 80%; margin-left: 15%; margin-top: 30px;">Fonte: <?=$linha['fonte'];?></h1>
                                <!-- Fim Fonte da noticia -->
                                <!-- Chamada da noticia -->
                                
                                <!-- Fim Descrição da noticia -->

                                <?php

                                    if($linha['arquivo'] == null){
                                ?>
                                    <!-- Texto da noticia -->

                                    <p style="width: 80%; margin-left: 15%; margin-top: 30px;"><?=$linha['texto'];?></p>
                                    <!-- Fim Texto da noticia -->
                                <?php

                                    }else{

                                ?>

                                    <!-- Arquivo da noticia -->
                                        <a href="/noticias/arquivos/<?=$linha['arquivo'];?>" class="btn btn-read-more"> Clique aqui para ver o arquivo >> </a>
                                    <!-- Fim Arquivo da noticia -->
                                <?php

                                    }

                                ?>
                            </div>
                        </div>
            <?php } ?>
            
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
