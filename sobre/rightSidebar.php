<!-- Right Sidebar -->
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
									<li><i class="icon-angle-right"></i><a href="/sobre/" class="btn  btn-sm">Institucional</a></li>
									<li><i class="icon-angle-right"></i><a href="/sobre/sdc.php" class="btn  btn-sm">Serviços de defesa comercial</a></li>
									<li><i class="icon-angle-right"></i><a href="/sobre/certidao.php" class="btn  btn-sm">Certidão sindical</a></li>
									<li><i class="icon-angle-right"></i><a href="/sobre/pragas.php" class="btn  btn-sm">Pragas e Soluções</a></li>									
								</ul>
                            </div>
                            <!-- Informativos -->
							<div class="widget">
								<h4 class="widgetheading">Informativos</h4>
								<ul class="recent">
									<?php

										require("../util/conexao.php");
										$sql = "SELECT * FROM informativos ORDER BY id DESC LIMIT 3";
										$anuncios = $conexao->query($sql);
										foreach ($anuncios as $linha) {

									?>
										<li>
											<center>
												<i class="fa fa-file-pdf-o" style="font-size:48px;color:#337ab7"></i>
											</center>
											<h6><?=$linha["titulo"];?></h6>
												<p></p>
												<center>
													<a href="/pdf/informativos/<?=$linha['arquivo'];?>" class="btn btn-read-more" target="_blank" style="color: white; background-color: #37b49c">
														Ler mais<span class="glyphicon glyphicon-chevron-right"></span><span class="glyphicon glyphicon-chevron-right"></span>
													</a>
												</center>
										</li>
									<?php
										}
									?>
									
								</ul>
							</div>

							<!--<div class="widget">
								<h5 class="widgetheading">Popular tags</h5>
								<ul class="tags">
									<li><a href="#">Web design</a></li>
									<li><a href="#">Trends</a></li>
									<li><a href="#">Technology</a></li>
									<li><a href="#">Internet</a></li>
									<li><a href="#">Tutorial</a></li>
									<li><a href="#">Development</a></li>
								</ul>
							</div> -->
							</aside>
					</div>
                </div>
<!-- Fim Rigght Sidebar -->