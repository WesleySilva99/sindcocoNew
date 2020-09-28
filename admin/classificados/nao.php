<?php

require "../../util/conexao.php";

$id = $_GET["id"];
$paginaRequest = $_GET["pg"];
$response = "";
try {

    $sql = "UPDATE anuncio SET autorizado = 0 WHERE id = ?";

    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(1, $id);

    $stmt->execute();

    $msg = "Anuncio não autorizado!";

    if ($paginaRequest == 1){
        $response = "index.php";
    }else{
        $response = "autorizar.php";
    }

    header("Location: /admin/classificados/$response?msg=" . $msg);
} catch (Exception $e) {
    echo 'Exceção capturada (Entre em contato com o administrador do sistema: wesleyceni99@gmail.com)<br>', $e->getMessage(), "\n";
}

?>