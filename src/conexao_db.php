<?php

$login = 'root'; 
$senha = '';

$conexao = new PDO('mysql:host=localhost;dbname=projeto_lanu',$login,$senha);

/*try {
    $conexao = new PDO('mysql:host=localhost;dbname=projeto_lanu',$login,$senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $erro) {
    echo 'ERROR: ' . $erro->getMessage();
}*/