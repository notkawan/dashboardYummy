<?php
$acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);
// $acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_NUMBER_INT);

switch ($acao){
    case 'clientes':
        include_once('./empresa/clientes.php');
        break;
    case 'eventos':
        include_once('./empresa/eventos.php');
        break;
    case 'funcionarios':
        include_once('./empresa/funcionarios.php');
        break;
}
?>