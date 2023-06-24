<?php
require_once('config.php');
date_default_timezone_set('America/Sao_Paulo');

try {
    $pdo = new PDO("mysql:dbname=$bd; host=$servidor; charset=utf8", "$usuario", "$senha");

    // Conexao MSQLI para o backup
    $conn = mysqli_connect($servidor, $usuario, $senha, $bd);
    
} catch (Exception $e) {
    echo "Erro ao conectar com o banco de dados... " + $e;
}

?>