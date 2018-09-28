<?php

    session_start();
    if(isset($_SESSION["login"])){
        header("Location: /admin/home.php");
    }

?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Administração Sindcoco</title>
        <meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="shortcut icon" type="image/png" href="/img/logoMini.png"/>

		<?php
		
			require("../util/imports.php");
            require("../util/conexao.php");
           

		?>
    </head>
    <body>
        <center>
            <h1>Administração SINDCOCO</h1> 
        </center>
        <div class="container">
  
        <div class="row" id="pwd-container">
            <div class="col-md-4"></div>
            
            <div class="col-md-4">
            <section class="login-form">
                <form method="POST" action="/admin/verificaLogin.php" role="login">
                <center>
                    <img src="/img/sindcoco.png" class="img-responsive" alt=""/>
                </center>
                <br>
                <h3>
                    Login:
                </h3>
                <input type="text" maxlenght="15" name="login" placeholder="login" required class="form-control input-lg" /> <br>
                <h3>
                    Senha:
                </h3>
                <input type="password" name="senha" class="form-control input-lg" id="password" placeholder="**********" required="" /> <br>
                
                
                <button type="submit" class="btn btn-success btn-block">Logar</button>
                
                </form>
                
            </section>  
            </div>
            
            

        </div>
    
  
  
    </div>   

    </body>
</html>