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
		

		
		
		
		<section class="blog-single cardn1" >
            
			<div class="container bg-light cardn2">
        
        <!-- cards -->
        <div id="cards" class="bg-light cardn3" >

            <h3 class="font-weight-light text-center my-3 cardn4" >Notícias</h3>
            <br>

          

            <!-- full size Card container -->
            <div class="container-fluid mx-auto d-none d-md-block my-3 cardn5">
                <div class="row cardn6">
<?php

                                require("../util/conexao.php");
                                $sql = "select * from noticias where autorizada = 1 and idCategoria = 3 order by id desc";
                                $noticia = $conexao->query($sql);

                                    foreach ($noticia as $linha) {  
                                ?>
                    <!-- Card # -->
                    <div class="col-6 col-lg-3 d-flex mb-3 cardn7" >
                        <div class="card flex-fill cardn8">

                            <div class="card-header bg-primary text-light rounded cardn9" style="font-size: 15px;"><?=$linha["titulo"];?></div>
                            <div class="card-body cardn10" >
                                <img src="/img/noticias/<?=$linha['imagem'];?>" alt="card-alt-img-text" class="card-img-top img-fluid cardn11">
                                <span class="cardn15" ><h6 style="font-size: 8px;">novo</h6></span>
                                <!--caso tenha alguma descrição, descomentar essa linha.
                                    <p class="my-2 cardn12" >Shorter description of the card.</p> -->
                                <ul>
                                    <li><a style="font-weight: 500;" >Data: <?=$linha['data'];?></a></li>
                                    
                                </ul>
                            </div>
                            <div class="card-footer cardn13" >
                                <button class="btn btn-outline-primary text-primary d-block w-75 mx-auto cardn14" >Ver mais.</button>
                            </div>
                        </div>
                    </div><!-- Card # -->

<?php
                            }
                            ?>

                   

                
            </div><!-- /full size Card container -->

        </div><!-- /cards -->

    </div>
					
		</section>
		
		
		
		
		
		

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>

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
