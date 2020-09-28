<?php

require "../../util/conexao.php";

$id = $_GET["id"];
$paginaRequest = $_GET["pg"];
$response = "";

try {

    $sql = "DELETE FROM anuncio WHERE id = ?";

    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(1, $id);

    $stmt->execute();

    if ($paginaRequest == 1){
        $response = "index.php";
    }else{
        $response = "autorizar.php";
    }

    $msg = "Anuncio Deletado com sucesso!";

    header("Location: /admin/classificados/index.php?msg=" . $msg);
} catch (Exception $e) {
    echo 'Exceção capturada (Entre em contato com o administrador do sistema: wesleyceni99@gmail.com)<br>', $e->getMessage(), "\n";
}

?>