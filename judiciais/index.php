<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Ações Judiciais</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php

            require "../util/imports.php";

        ?>
		<!-- fav icon -->

			<link rel="shortcut icon" type="image/png" href="/img/logoMini.png"/>

			<style type="text/css">
				.notice {
    padding: 15px;
    background-color: #fafafa;
    border-left: 6px solid #7f7f84;
    margin-bottom: 10px;
    -webkit-box-shadow: 0 5px 8px -6px rgba(0,0,0,.2);
       -moz-box-shadow: 0 5px 8px -6px rgba(0,0,0,.2);
            box-shadow: 0 5px 8px -6px rgba(0,0,0,.2);
}
.notice-sm {
    padding: 10px;
    font-size: 80%;
}
.notice-lg {
    padding: 35px;
    font-size: large;
}
.notice-success {
    border-color: #80D651;
}
.notice-success>strong {
    color: #80D651;
}
.notice-info {
    border-color: #45ABCD;
}
.notice-info>strong {
    color: #45ABCD;
}
.notice-warning {
    border-color: #FEAF20;
}
.notice-warning>strong {
    color: #FEAF20;
}
.notice-danger {
    border-color: #d73814;
}
.notice-danger>strong {
    color: #d73814;
}
			</style>

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
							<h3>Ações judiciais.</h3>
								<br>
							<?php
                require "../util/conexao.php";
                $sql = "SELECT * FROM acoes ORDER BY id DESC";
                $anuncios = $conexao->query($sql);
                foreach ($anuncios as $linha) {
              ?>
    <div class="notice notice-info">
    	<strong >Leia Mais</strong>
    	<a href="/pdf/judicial/<?=$linha['arquivo'];?>"> <?=$linha["titulo"];?></a>
        
    </div>
    <?php
                }
              ?>
    


						</div>




						<!--


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
						-->

						<!-- Pagination 
						<div id="pagination">
							<span class="all">Page 1 of 3</span>
							<span class="current">1</span>
							<a href="#" class="inactive">2</a>
							<a href="#" class="inactive">3</a>
						</div>
						 Pagination -->

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
