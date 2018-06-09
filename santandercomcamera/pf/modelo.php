<?php 
    $nome = $_POST['modelo'];
    $nome2 = explode("(",$nome);
    unset($nome2[0]);
    $nome3 = implode(" ",$nome2);
    $nome4 = explode(")", $nome3);
    $retorno = $nome4[0];
    echo $retorno;