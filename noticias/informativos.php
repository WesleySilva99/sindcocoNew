<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Noticias do SINDCOCO</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php

require "../util/imports.php";

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

include "nav.php";

?>



		<section class="blog-single" style="margin-top: 150px;">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="single-blog">
							<h3>Informativos.</h3>
							<img src="/img/logoPag.png" alt="Blog Image" width="100%"/>
							<?php
								require "../util/conexao.php";
								$sql = "SELECT * FROM informativos WHERE autorizado = 1 ORDER BY id DESC";
								$anuncios = $conexao->query($sql);
								foreach ($anuncios as $linha) {
							?>

								<h5>
									<?=$linha["titulo"];?>
								</h5>
								<div class="feature-icon">
										<i class="fa fa-file-pdf-o" style="font-size:48px;color: #337ab7;"></i>
										<a href="/pdf/informativos/<?=$linha['arquivo'];?>" class="btn btn-read-more" target="_blank">
											Ler mais>>
                    					</a><br>
								</div>
								<br>
							<?php
								}
							?>

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
					<?php
						require "rightSidebar.php";
					?>
			</div>
		</section>



		<!-- Footer -->
		<?php

			require "footer.php";

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
