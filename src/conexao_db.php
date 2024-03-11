<?php

$login = 'root'; 
$senha = '';

$conexao = new PDO('mysql:host=localhost;dbname=projeto_lanu',$login,$senha);

if(!$conexao){
    die('Connection Failed'. mysqli_connect_error());
}