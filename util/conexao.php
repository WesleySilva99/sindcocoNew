<?php

// Conexão Local

$host = "localhost";
$dbname = "sindcoco";
$usuario = "root";
$senha = "BHU*nji9";

try {
    $conexao = new PDO("mysql:host=$host; dbname=$dbname", "$usuario", "$senha");
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
}

?>