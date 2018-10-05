<?php

require "uploadImagem.php";
require "../../util/conexao.php";

$pdf = $novoNome;
$titulo = $_POST["titulo"];
$data = $_POST["data"];

try {

    $sql = "INSERT INTO acoes(titulo, data, arquivo) VALUES (?,?,?)";

    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(1, $titulo);
    $stmt->bindValue(2, $data);
    $stmt->bindValue(3, $pdf);

    $stmt->execute();

    $msg = "Ação cadastrada com sucesso!";

    header("Location: /admin/acoes/index.php?msg=" . $msg);
} catch (Exception $e) {
    echo 'Exceção capturada (Entre em contato com o administrador do sistema: ', $e->getMessage(), "\n";
}

?>