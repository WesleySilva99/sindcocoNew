<?php

require "../../util/conexao.php";

 $nome=$_POST['nome'];
 $descricao=$_POST['descricao'];
 $id=$_POST['id'];


define('DEST_DIR', __DIR__ . '../img');
if (isset($_FILES['arquivo']) &&
!empty($_FILES['arquivo']['name']))
{
$arquivo = $_FILES['arquivo'];
$arquivofoto = ',descricao="'.$arquivo['name'].'"';
if (!move_uploaded_file($arquivo['tmp_name'],
DEST_DIR . '/' . $arquivo['name']))
{
//echo "Erro ao enviar arquivo";
}
}else{
  $arquivofoto = "";

try {

$stmt =$conn->prepare("update amostragem_praga set id_praga = ?,descricao = ? 
 where id = ? ");
$stmt->bindParam(1, $nome);
$stmt->bindParam(2, $descricao);
$stmt->bindParam(3, $id);
$stmt->execute();

    header("Location: /admin/pragas/index.php?msg=".$msg);
} catch (Exception $e) {
    echo 'Exceção capturada (Entre em contato com o administrador do sistema: ', $e->getMessage(), "\n";
}
     ?>