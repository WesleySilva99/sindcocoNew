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
			$sql = "SELECT titulo FROM eventos WHERE id = ?";
            $stmt = $conexao->prepare($sql);
			$stmt->bindValue(1, $_GET['id']);
			$titulo;
			$stmt->execute();
			foreach ($stmt as $linha) {
				$titulo = $linha['titulo'];
			}
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
		

		
		
		
		<section class="blog-single">
			<div class="container">
				<div class="row" style="margin-top: 100px;">
					<div class="col-md-8">
						<h1>Evento: <?=$titulo;?></h1>
						

							
							<br>
							
							<?php

								
								$sql = "SELECT e.titulo, e.descricao, e.data, ei.imagem FROM imagem_evento AS ei INNER JOIN eventos AS e ON e.id = ei.id_evento WHERE ei.id_evento = ? AND ei.ativo = 1";
                                $stmt = $conexao->prepare($sql);
                                $stmt->bindValue(1, $_GET['id']);
                            
                                $stmt->execute();

									foreach ($stmt as $linha) {	
								?>
								<div class="single-blog" style="border: 1px solid rgba(0,0,0,.125);">
								<h4>
								</h4><br>
								<img src="/img/eventos/<?=$linha['imagem'];?>" alt="Blog Image" width="100%"/>
								
								<div class="blog-info">
								<ul>
									<li>Data: <?=$linha['data'];?></li>
									
								</ul>
								<br>
								
							</div>
							

							
						</div>
						
						<?php
							}
							?>
							
						<!-- Pagination -->
						<div id="pagination">
							<span class="all">Page 1 of 3</span>
							<span class="current">1</span>
							<a href="#" class="inactive">2</a>
							<a href="#" class="inactive">3</a>
						</div>
						</div>

						<?php
						require("rightSidebar.php");
							?>
						
						
						<!--<div class="single-blog">
							<a href="#"><h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3></a>
							<iframe width="100%" height="450" src="https://www.youtube.com/embed/AASd5ewKNSw" frameborder="0" allowfullscreen></iframe>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
							<div class="blog-info">
								<ul>
									<li><a href="">Date: June 05, 2016</a></li>
									<li><a href="">Author Name</a></li>
									<li><a href="">Category</a></li>
									<li><a href="">10 Comments</a></li>
								</ul>
								
								<div class="read-more pull-right">
									<a href="#" class="btn btn-readmore">Continue Reading</a>
								</div>
								
							</div>
							
						</div> -->
						
						
						<!-- Pagination -->
					
			</div>
		</section>
		
		
		
		<!-- Footer -->
		<?php

			require("footer.php");

		?>
		
		
		

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
