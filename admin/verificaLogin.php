<?php

    require("../util/conexao.php");

    $login = $_POST["login"];
    $senha = md5($_POST["senha"]);
    $msg = "Login ou Senha inválidos!";

    echo "Login: $login <br> Senha: $senha <br>";

    $sql = "SELECT * FROM usuario WHERE login = ?";

    $stmt = $conexao->prepare($sql);
	$stmt->bindParam(1, $login);
	$stmt->execute();	
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach($resultado as $linha){

        
        if (strcmp($linha["senha"], $senha) == 0) {
            session_start();
            $_SESSION["login"] = $linha["login"];
            $_SESSION["nome"] = $linha["nome"];
            $_SESSION["adm"] = $linha["adm"];
            $_SESSION["id"] = $linha["id"];

            header("Location: /admin/home.php");
            
        } else {

            header("Location: /admin/index.php?msg=".$msg);

        }
        
        

    }


?>

