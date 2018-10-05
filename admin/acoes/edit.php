<?php

require "../../util/conexao.php";

$id = $_POST['id'];
$titulo = $_POST["titulo"];
$data = $_POST["data"];

try {

    $sql = "UPDATE acoes SET titulo = ?, data = ? WHERE id = ?";

    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(1, $titulo);
    $stmt->bindValue(2, $data);
    $stmt->bindValue(3, $id);

    $stmt->execute();

    $msg = "Ação editada com sucesso!";

    header("Location: /admin/acoes/index.php?msg=" . $msg);
} catch (Exception $e) {
    echo 'Exceção capturada (Entre em contato com o administrador do sistema: ', $e->getMessage(), "\n";
}

?>