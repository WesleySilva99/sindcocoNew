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
							<!-- Informativos -->
							<div class="widget">
								<h4 class="widgetheading" >Informativos</h4>
								<ul class="recent">
									<?php

										require("../util/conexao.php");
										$sql = "SELECT * FROM informativos ORDER BY id DESC LIMIT 3";
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