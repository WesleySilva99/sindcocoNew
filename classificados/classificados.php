<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Classificados</title>
        <meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="shortcut icon" type="image/png" href="/img/logoMini.png"/>

		<?php
		
			require("../util/imports.php");
			require("../util/conexao.php");

		?>
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
				<div class="row">
					<div class="col-md-8">
						<div class="single-blog">
							<h2>Classificados.</h3>
							<img src="/img/logo.gif" alt="Blog Image" width="100%"/>
							<h2>
								Ultimos Anuncios
							</h2>
						
							<?php
								$sql = "SELECT * FROM anuncio WHERE autorizado = 1 ORDER BY data DESC";
								$anuncios = $conexao->query($sql);
								foreach ($anuncios as $linha) {
									$id = $linha["id"];
									$foto = "/img/anuncios/".$id.".jpg";
							?>

							<div class="single-blog">
							<a href="#"><h3><?=$linha['titulo'];?></h3></a>
							<? if(file_exists($foto)) {?>
								<img src="/img/anuncios/<?=$id?>.jpg&l=119&a=80" />
							<? } else { ?>
									<img src="/img/anuncios/off.jpg&l=119&a=80" />
							<? } ?>
							<p><?=$linha['descricao'];?></p>
							<div class="blog-info">
								<ul>
									<li><a href="#">Data: <?=date('d/m/Y H:i:s', strtotime($linha['data']));?></a></li>
									<li><a href="#">Nome: <?=$linha['nome'];?></a></li>
									<li><a href="#">Telefone: <?=$linha['telefone'];?></a></li>
								</ul>
								
								<div class="read-more pull-right">
									<a href="#" class="btn btn-read-more">Ver mais &gt;&gt;</a>
								</div>
								
							</div>
							
						</div>
								
							<?php
								}
							?>
						</div>
						
						
						
						
						
						
						
						<div class="single-blog">
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
							
						</div>
						
						
						<!-- Pagination -->
						<div id="pagination">
							<span class="all">Page 1 of 3</span>
							<span class="current">1</span>
							<a href="#" class="inactive">2</a>
							<a href="#" class="inactive">3</a>
						</div>
						<!-- Pagination -->
						
					</div>
					
					<!-- Right Sidebar -->
					<div class="col-md-4">
						<aside class="right-sidebar">
							<div class="widget">
								<form class="form-search">
									<input class="form-control" type="text" placeholder="Search..">
								</form>
							</div>

							<!-- Formulário de classificados -->
							<div class="widget">
							<?php

								if($_GET['msg'] != null){
									echo "<h3>".$_GET['msg']."</h3>";	
								}
							?>
								
								<center>
									<img src="/img/anuncie.png" />
								</center>
									<form class="form" action="/blog/inserirClassificado.php" enctype="multipart/form-data" method="POST">
										<h4>Nome: </h4>
										<input type="text" class="form-control" required placeholder="José Carlos de Souza" require="require" name="nome" /><br>
										<h4>Email: </h4>
										<input type="email" class="form-control" placeholder="example@example.com" require name="email" /><br>
										<h4>Título: </h4>
										<input type="text" class="form-control" placeholder="Vendo cocos por unidade" require name="titulo" /><br>
										<h4>Descrição: </h4>
										<textarea type="text" class="form-control" required name="descricao"> </textarea><br>
										<h4>Preço: </h4>
										<input type="number" class="form-control" required name="preco" /><br>
										<h4>Imagem: </h4>
										<input type="file" class="form-control" required name="imagem" /><br>
										<h4>Telefone: </h4>
										<input type="text" maxlength="14" minlength="14" class="form-control" required name="telefone" /><br>

										<button class="btn btn-success"> Enviar </button>
										<button class="btn btn-danger"> Resetar </button>

									</form>
									<!-- Fim do Formulário de classificados -->
							</div>
							<div class="widget">
								<h5 class="widgetheading">Latest posts</h5>
								<ul class="recent">
									<li>
									<img src="img/blog-thumb.jpg" class="pull-left blog-thumb-image" alt="" />
									<h6><a href="#">Lorem ipsum dolor sit</a></h6>
									<p>
										 Mazim alienum appellantur eu cu ullum officiis pro pri
									</p>
									</li>
									<li>
									<a href="#"><img src="img/blog-thumb.jpg" class="pull-left blog-thumb-image" alt="" /></a>
									<h6><a href="#">Maiorum ponderum eum</a></h6>
									<p>
										 Mazim alienum appellantur eu cu ullum officiis pro pri
									</p>
									</li>
									<li>
									<a href="#"><img src="img/blog-thumb.jpg" class="pull-left blog-thumb-image" alt="" /></a>
									<h6><a href="#">Et mei iusto dolorum</a></h6>
									<p>
										 Mazim alienum appellantur eu cu ullum officiis pro pri
									</p>
									</li>
								</ul>
							</div>
							<div class="widget">
								<h5 class="widgetheading">Popular tags</h5>
								<ul class="tags">
									<li><a href="#">Web design</a></li>
									<li><a href="#">Trends</a></li>
									<li><a href="#">Technology</a></li>
									<li><a href="#">Internet</a></li>
									<li><a href="#">Tutorial</a></li>
									<li><a href="#">Development</a></li>
								</ul>
							</div>
							</aside>
					</div>
				</div>
			</div>
		</section>
		
		
		
		<!-- footer -->
		
		<footer>
			<div class="container">
				<div class="row">
				
					<!-- Single Footer -->
					<div class="col-sm-3">
						<div class="single-footer">
							<div class="footer-logo">
								<img src="/img/logoMini.png" alt="Footer Logo" />
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut .</p>
							</div>
						</div>
					</div>
					<!-- Single Footer -->
					
					
					<!-- Single Footer -->
					<div class="col-sm-3">
						<div class="single-footer">
							<h4>Keep In Touch</h4>
							<p>44 New Design Street, Melbourne 005 <br />
							+1 (123) 456-7890-321 <br />
							info@weburl.com <br />
							(01) 800 854 633</p>
						</div>
					</div>
					<!-- Single Footer -->
					
					
					<!-- Single Footer -->
					<div class="col-sm-3">
						<div class="single-footer">
							<h4>Suscribe</h4>
							<p>Enter your Email Address For Subscirbe Our Monthly Newsletters</p>
							
							<form action="">
								<div class="form-group">
									<input type="email" class="form-control my-form" id="exampleInputEmail1" placeholder="Enter Your Email Address">
								</div>
								<div class="form-group">
									<button class="btn btn-subscribe">Subscirbe</button>
								</div>
							</form>
							
						</div>
					</div>
					<!-- Single Footer -->
					
					<!-- Single Footer -->
					<div class="col-sm-3">
						<div class="single-footer">
							<h4>Recent Projects</h4>
							<ul class="projects">
								<li><img src="/img/project.png" alt="Reccent Project" /></li>
								<li><img src="/img/project.png" alt="Reccent Project" /></li>
								<li><img src="/img/project.png" alt="Reccent Project" /></li>
								<li><img src="/img/project.png" alt="Reccent Project" /></li>
								<li><img src="/img/project.png" alt="Reccent Project" /></li>
								<li><img src="/img/project.png" alt="Reccent Project" /></li>
							</ul>
						</div>
					</div>
					<!-- Single Footer -->
					
				</div>
			</div>
			
		</footer>
		
		<!-- Copyright -->
		<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<div class="copy-text">
								<p>All Rights Reserved | Copyright 2016 © <strong><a href="http://www.pfind.com/goodies/bizium/">The Bizium</a></strong> template by <strong><a href="http://www.pfind.com/goodies/">pFind's Goodies</a></strong></p>
							</div>
						</div>
						<div class="col-sm-5">
							<div class="footer-menu pull-right">
								<ul>
									<li><a href="#">Home</a></li>
									<li><a href="#">About</a></li>
									<li><a href="#">Services</a></li>
									<li><a href="#">Faq</a></li>
									<li><a href="#">Pricing</a></li>
									<li><a href="#">Blog</a></li>
									<li><a href="#">Contact</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="social">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		
		<!-- footer -->
		
		
		

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="/js/plugins.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/main.js"></script>

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
