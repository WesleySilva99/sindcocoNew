<!-- Main Menu Start -->
<div class="main-menu">
				<div class="navbar-wrapper">
					<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
						<div class="container">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only">Toggle Navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								
								<!-- <a href="" class="navbar-brand"><img src="img/logo.png" alt="Logo" /></a>	-->
							</div>
							
							<div class="navbar-collapse collapse">
								<ul class="nav navbar-nav navbar-right">
									<li><a href="/admin/home.php">Início</a></li>
									<?php

										if($_SESSION["adm"] == 1){

									?>
									
									<li><a href="/admin/usuarios/">Usuarios</a></li>
									<li><a href="/admin/noticias/">noticias</a></li>
									<li><a href="/admin/banners/">Banners</a></li>
									<li><a href="/admin/eventos/">Eventos</a></li>
									<li><a href="/admin/links/">Links úteis</a></li>
									<li><a href="/admin/informativos/">Informaticos</a></li>
									<li><a href="/admin/acoes/">Ações judiciais</a></li>
									
									<?php
										}
									?>
									<li><a href="/admin/classificados/">classificados</a></li>
									<li><a href="/admin/logof.php">Sair</a></li>
								</ul>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<!-- Main Menu End -->
			
			
		</header>
        <!-- Header End -->
        