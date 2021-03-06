<?php

require("../../util/conexao.php");


$id = $_POST["id"];
$descricao = $_POST["descricao"];


try {

    $sql = "UPDATE tatica_praga SET descricao = ? where id = ?";
    
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(1, $descricao);
    $stmt->bindValue(2, $id);

    $stmt->execute();

    $msg = "Informações sobre táticas de controle com sucesso!";
    
    header("Location: /admin/pragas/index.php?msg=".$msg);
} catch (Exception $e) {
    echo 'Exceção capturada (Entre em contato com o administrador do sistema: ',  $e->getMessage(), "\n";
}

?>