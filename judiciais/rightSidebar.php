<!-- Right Sidebar -->
<div class="col-md-4">
						<aside class="right-sidebar">
							

                           
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
							</div>-->
							</aside>
					</div>
                </div>
<!-- Fim Rigght Sidebar -->