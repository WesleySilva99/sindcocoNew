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
    <style type="text/css">
      .imagemanuncio{
        width: 50%;
      }
    </style>
    <body class="blog">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
		<!-- Header Start -->
		<header>
			
			<?php

				include("nav.php");

			?>
		


 	

		
		
		<section class="blog-single b" style="margin-top: -50px;">
			<div class="container">
    <div class="row">
    <div class="col-md-6">
      <div class="card-counter primary">
        <i class="glyphicon glyphicon-bullhorn"></i>
         <?php

               $query = "select count(id) as id from anuncio where autorizado = 1";
               $resultado = $conexao->query($query);
                foreach ($resultado as $linha) {
                  $quantidade = $linha["id"];
               
            ?>
            
            
        <span class="count-numbers"><?=$quantidade;?></span>
        <?php
                }
            ?>
        <span class="count-name">Total de anuncios.</span>
      </div>
    </div>



    <div class="col-md-6" data-toggle="modal" data-target="#exampleModalLong">
      <div class="card-counter info">
        <i class="glyphicon glyphicon-new-window"></i>
        <span class="count-numbers">Anuncie</span>
        <span class="count-name">Clique aqui para fazer seu anuncio.</span>
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

                    <form action="../classificados/inserirClassificado.php" method="post" enctype="multipart/form-data">
                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2" >
                                    <h3><i class="fa fa-envelope"></i> Anuncio</h3>
                                    <p class="m-0">Preencha todos os campos corretamente.</p>
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <!--Body-->
                                <div class="form-group">
                                    <div >
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="nombre" name="nome" placeholder="Nome Completo" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div >
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email"  class="form-control" id="nombre" name="email" placeholder="Email ex: exemplo@gmail.com" required>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <div >
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="	glyphicon glyphicon-earphone " style="color: #31708f;"></i></div>
                                        </div>
                                        <input type="text"  class="form-control" id="nombre" name="telefone" placeholder="Seu Telefone" required>
                                    </div>
                                </div>
                                
                                 <div class="form-group">
                                    <div >
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="glyphicon glyphicon-pencil" style="color: #31708f;"></i></div>
                                        </div>
                                        <input type="text"  class="form-control" id="nombre" name="titulo" placeholder="Titulo do anuncio." required>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <div>
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="glyphicon glyphicon-usd" style="color: #31708f;"></i></div>
                                        </div>
                                        <input type="text"  class="form-control" id="nombre" name="preco"   placeholder="Preço ex: 00,00. " required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div>
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="glyphicon glyphicon-pencil" style="color: #31708f;"></i></div>
                                        </div>
                                        <input type="text"  class="form-control" id="nombre" name="cidade"   placeholder="Cidade. Ex: Jaboatão dos Guararapes" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div>
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">Estado: </div>
                                        </div>
                                        <select name="estado" required="required">
                                          <option value="">Selecione uma Opção:</option>
                                          <?php

                                            $query2 = "SELECT id, nome FROM estado";
                                            $resultado2 = $conexao->query($query2);
                                            foreach ($resultado2 as $linha2) {
                                          ?>
                                            <option value="<?=$linha2['id'];?>"><?=$linha2['nome'];?></option>

                                          <?php

                                            }

                                          ?>
                                        </select>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <div >
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="	glyphicon glyphicon-open-file" style="color: #31708f;"></i></div>
                                        </div>
                                        <input type="file"  class="form-control"  name="imagem" required>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div >
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                        </div>
                                        <textarea class="form-control" name="descricao"  placeholder="Descricão." required></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div >
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                        </div>
                                        <textarea class="form-control" name="obs"  placeholder="Observações." required></textarea>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input type="submit" value="Enviar"  class="btn btn-info btn-block rounded-0 py-2">
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
 
# inclui o arquivo config(arquivo de conexão com o banco de dados)
require("../util/conexao.php");
 
# Limita o número de registros a serem mostrados por página
$limite = 32;
 
# Se pg não existe atribui 1 a variável pg
$pg = (isset($_GET['pg'])) ? (int)$_GET['pg'] : 1;
 
# Atribui a variável inicio o inicio de onde os registros vão ser
# mostrados por página, exemplo 0 à 10, 11 à 20 e assim por diante
$inicio = ($pg * $limite) - $limite;
 
# seleciona os registros do banco de dados pelo inicio e limitando pelo limite da variável limite
$sql = "SELECT * FROM anuncio  WHERE autorizado = 1 ORDER BY data DESC LIMIT ".$inicio. ", ". $limite;
 
try {
       
        $query = $conexao->prepare($sql);
        $query->execute();
 
        } catch (PDOexception $error_sql){
 
                echo 'Erro ao retornar os Dados.'.$error_sql->getMessage();
 
}
 
while($linha = $query->fetch(PDO::FETCH_ASSOC)){ ?>
     
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
    <a href="/classificados/detalhes.php?id=<?=$linha['id'];?>" class="btn btn-primary card6" class="btn btn-primary" data-toggle="modal" >Detalhes</a>
  </div>
</div>

</div>   
<!-- Button trigger modal -->


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
        <center>
        <?php

                if($linha["imagem"] != null){
              ?>
  <img class="card-img-top"  style="height: 350px;" src="/img/anuncios/<?=$linha['imagem'];?>" alt="Card image cap">
  <?php
              }else {
                ?>
                <img src="/img/anuncios/off.jpg"  class="card2" />
              <?php
                }
              ?>
       </center>
    <p class="card-text" ><i class="glyphicon glyphicon-edit sd2"> Descrição:</i> <?=$linha['descricao'];?></p>
    <h5 class="card-title" style="    color: #ab9812;" >Preço R$: <?php if($linha["preco"] != null){
                                      ?>
                                      <?=$linha['preco'];?>
                                        <?php
                                      }else{
                                        ?>
                                        Valor a combinar.
                                        <?php
                                         }
                                         ?></h5>
    <br>
    <h4 class="card-title" >Dados do usuario.</h4>
    <p class="col-md-6" ><i class=" glyphicon glyphicon-user sd2"> Nome:</i> <?=$linha['nome'];?></p>
    <p class="col-md-5" ><i class="glyphicon glyphicon-earphone sd2"> Tefone:</i> <?=$linha['telefone'];?></p>
    <p class="col-md-6" > <i class="glyphicon glyphicon-envelope sd2"> E-mail:</i> <?=$linha['email'];?></p>
    <p class="col-md-5" ><i class="glyphicon glyphicon-road sd2"> Estado:</i> <?=$linha['estado'];?></p>
    <p class="col-md-4" ><i class="glyphicon glyphicon-home sd2"> Cidade:</i> <?=$linha['cidade'];?></p>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<?php }
 
# seleciona o total de registros  
$sql_Total = ' SELECT nome FROM anuncio WHERE autorizado = 1';
 
try {
       
        $query_Total = $conexao->prepare($sql_Total);
        $query_Total->execute();
 
        $query_result = $query_Total->fetchAll(PDO::FETCH_ASSOC);
 
        # conta quantos registros tem no banco de dados
        $query_count =  $query_Total->rowCount(PDO::FETCH_ASSOC);
 
        # calcula o total de paginas a serem exibidas
        $qtdPag = ceil($query_count/$limite);
 
        } catch (PDOexception $error_Total){
       
                echo 'Erro ao retornar os Dados. '.$error_Total->getMessage();
 
        }
 
        
        # echo '<a href="busca?pg=1">PRIMEIRA PÁGINA</a>&nbsp;';
        echo '<ul class="pagination">';
    echo '<li><a  href="teste.php?pg=1">Principal</a></li>';
       
        if($qtdPag > 1 && $pg <= $qtdPag){
               
                for($i = 1; $i <= $qtdPag; $i++){
 
                        if($i == $pg){
 
                                echo "<li><a class='active'>".$i."</a></li>";
 
                        } else {
 
                                echo "<li><a href='teste.php?pg=$i'>".$i."</a></li>";
                               
                        }
 
                }
 
        }
 
        echo "<li><a  href='teste.php?pg=$qtdPag'>Ultima</a></li>";
 
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
