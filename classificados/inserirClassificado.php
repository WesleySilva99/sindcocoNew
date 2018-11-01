<?php

    require("../util/conexao.php");

    require("uploadImagem.php");

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $titulo = $_POST["titulo"];
    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];
    $imagem = $novoNome;
    $fone = $_POST["telefone"];
    $ativo = 0;

    try {

        $sql = "INSERT INTO anuncio (nome, email, titulo, descricao, preco, imagem, fone, ativo) VALUES (?,?,?,?,?,?,?,?)";

        
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(1, $nome);
        $stmt->bindValue(2, $email);
        $stmt->bindValue(3, $titulo);
        $stmt->bindValue(4, $descricao);
        $stmt->bindValue(5, $preco);
        $stmt->bindValue(6, $imagem);
        $stmt->bindValue(7, $fone);
        $stmt->bindValue(8, $ativo);

        $stmt->execute();

        $msg = "Anuncio Cadastrado com sucesso!";
        
        header("Location: /classificados/index.php?msg=".$msg);
    } catch (Exception $e) {
        echo 'Exceção capturada (Entre em contato com o administrador do sistema: ',  $e->getMessage(), "\n";
    }



?>