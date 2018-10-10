<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Sobre o SINDCOCO</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        
        <!-- Font -->
            <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,700,600italic,700italic,800,800italic' rel='stylesheet' type='text/css'>
            <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <!-- Font -->
        
        
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/font-awesome.min.css">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/responsive.css">
        <script src="/js/vendor/modernizr-2.8.3.min.js"></script>
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

                include("nav.php");

            ?>
        
        
        
        <section class="blog-single" style="    margin-top: 150px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="single-blog">
                                
                            <div class="widget">
                                 <div style="border-top: 1px solid; border-bottom: 1px solid; border-color: rgba(0,0,0,.2);">
                                    
                                <h2 class="widgetheading" style="margin-top: 10px; margin-bottom: 10px;">Ações Judiciais.</h2>
                                    
                                     </div>  
                                
                            <div class="teste" style="margin-top: 70px;">
                                <?php

                                        require("../util/conexao.php");
                                        $sql = "SELECT * FROM informativos WHERE autorizado = 1 ORDER BY id DESC LIMIT 3";
                                        $anuncios = $conexao->query($sql);
                                        foreach ($anuncios as $linha) {

                                    ?>
                                <div class="notice notice-success">
                                    <strong>Ações </strong> <a href="/pdf/informativos/<?=$linha['arquivo'];?>"><?=$linha["titulo"];?></a>

                                </div>

                                <?php
                                        }
                                    ?>
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
                    <?php
                        require("rightSidebar.php");
                    ?>
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
