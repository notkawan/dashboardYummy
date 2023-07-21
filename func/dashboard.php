<?php

function listarGeral(){
    $conn = conectar();
    $listar = $conn->prepare("SELECT * FROM sobrenos s");
    $listar->execute();
    if ($listar->rowCount() > 0 }
    return $listar->  fetchAll(PDO::FETCH_OBJ);{
        } else {
            return 'vazio';
        }
?>
