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
		


 	

		
		
		<section class="blog-single b">
			<div class="row class1" >
				<br>
 			<div class="col-lg-3 col-md-6 col-12 class2" >
 				<div class="card card-sm-3 class3" >
 					<div class="card-icon bg-primary class4">
 						<i class="	glyphicon glyphicon-list-alt"></i>
 					</div>
 					<div class="card-wrap class5">
 						<div class="card-header class6"><h4 class="class7">Total de Anuncios.</h4>
 						</div>
 						<div class="card-body class8">122
 						</div>
 					</div>
 				</div>
 			</div>
 			
 			<div class="col-lg-3 col-md-6 col-12 class2" data-toggle="modal" data-target="#exampleModalLong">
 				<div class="card card-sm-3 class3">
 					<div class="card-icon bg-warning class4 " style="background-color: #ffff37;">
 						<i class="glyphicon glyphicon-pencil" style="color: black;"></i>
 					</div>
 					<div class="card-wrap class5">
 						<div class="card-header class6"><h4 class="class7">Clique aqui e faça seu anuncio.</h4>
 						</div>
 						<div class="card-body class8">
 						</div>

 					</div>
 				</div>

 			</div>



<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Anuncie aqui.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<div class="container" >
    
	<div class="row justify-content-center">
		<div class="col-12 col-md-8 col-lg-6 pb-5">


                    <!--Form with header-->

                    <form action="mail.php" method="post">
                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2" style="width: 540px;">
                                    <h3><i class="fa fa-envelope"></i> Anuncio</h3>
                                    <p class="m-0">Preencha todos os campos corretamente.</p>
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" style="width: 540px;" class="form-control" id="nombre" name="nombre" placeholder="Nome Completo" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" style="width:  540px;" class="form-control" id="nombre" name="email" placeholder="Email ex: exemplo@gmail.com" required>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="	glyphicon glyphicon-earphone " style="color: #31708f;"></i></div>
                                        </div>
                                        <input type="text" style="width: 540px;" class="form-control" id="nombre" name="nombre" placeholder="Seu Telefone" required>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="glyphicon glyphicon-pencil" style="color: #31708f;"></i></div>
                                        </div>
                                        <input type="text" style="width: 540px;" class="form-control" id="nombre" name="nombre" placeholder="Titulo do anuncio." required>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="glyphicon glyphicon-usd" style="color: #31708f;"></i></div>
                                        </div>
                                        <input type="text" style="width: 540px;" class="form-control" id="nombre" name="nombre"   placeholder="Preço ex: 00,00. " required>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="	glyphicon glyphicon-open-file" style="color: #31708f;"></i></div>
                                        </div>
                                        <input type="file" style="width: 540px;" class="form-control"   required>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                        </div>
                                        <textarea class="form-control" style="width:  540px;" placeholder="Descricão." required></textarea>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input type="submit" value="Enviar" style="width: 540px;" class="btn btn-info btn-block rounded-0 py-2">
                                </div>
                            </div>

                        </div>
                    </form>
                    <!--Form with header-->


                </div>
	</div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

 			
 		</div>
 		<br>
 		<br>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="container">
	<div class="row">
		
		<?php
								$sql = "SELECT * FROM anuncio  WHERE autorizado = 1 ORDER BY data DESC LIMIT 30";
								$anuncios = $conexao->query($sql);
								foreach ($anuncios as $linha) {
									$id = $linha["id"];
							?>
		<div class="col-md-3" style="margin-bottom: 30px;">
<div class="card card1" >
	<?php
								if($linha["imagem"] != null){
							?>
  <img class="card-img-top card2"  src="/img/anuncios/<?=$linha['imagem'];?>" alt="Card image cap">
  <?php
							}else {
								?>
								<img src="/img/anuncios/off.jpg" class="card2" />
							<?php
								}
							?>
  <div class="card-body card3" >
    <h5 class="card-title card4" ><?=$linha['titulo'];?></h5>
    <p class="card-text card5" ><?=$linha['descricao'];?></p>
    <a href="#" class="btn btn-primary card6" class="btn btn-primary" data-toggle="modal" data-target="#example1">Detalhes</a>
  </div>
</div>

</div>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="example1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle"><?=$linha['titulo'];?></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<?php
								if($linha["imagem"] != null){
							?>
  <img class="card-img-top"  style="height: 350px;" src="/img/anuncios/<?=$linha['imagem'];?>" alt="Card image cap">
  <?php
							}else {
								?>
								<img src="/img/anuncios/off.jpg" class="card2" />
							<?php
								}
							?>
       
    <p class="card-text " > Descrição: <?=$linha['descricao'];?></p>
    <h5 class="card-title" style="    color: #ab9812;" >Preço R$: <?=$linha['preco'];?></h5>
    <br>
    <h4 class="card-title" >Dados do usuario.</h4>
    <p class="card-text " > Nome: <?=$linha['nome'];?></p>
    <p class="card-text " > Telefone: <?=$linha['telefone'];?></p>
    <p class="card-text " > E-mail: <?=$linha['email'];?></p>
    <p class="card-text " > Estado: <?=$linha['estado'];?></p>
    <p class="card-text " > Cidade: <?=$linha['cidade'];?></p>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<?php
								}
							?>

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
