<?php

    require("../conexao.php");

    $nome = "Francisco";
    $login = "newSindcoco";
    $senha = "newAdmSindcoco";

    $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuario(nome, login, senha) VALUES (?,?,?)";
        
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(1, $nome);
    $stmt->bindValue(2, $login);
    $stmt->bindValue(3, $senhaCriptografada);
    $stmt->execute();

?>