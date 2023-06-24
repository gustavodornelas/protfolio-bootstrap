<?php

require_once("./conexao.php");

date_default_timezone_set('America/Sao_Paulo');

$data = date("Y/m/d");
$nome = $_POST["nome"];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

if ($nome == "") {
    echo 'Preencha o seu nome...';
    exit();
}

if ($email == "") {
    echo 'Preencha o seu email...';
    exit();
}

if ($assunto == "") {
    echo 'Preencha o assunto...';
    exit();
}

if ($mensagem == "") {
    echo 'Preencha o a sua mensagem...';
    exit();
}

else {
    $res = $pdo->prepare("INSERT INTO tab_contatos
    (nome, email, assunto, mensagem, data)
    VALUES (:nome, :email, :assunto, :mensagem, :data)");
    $res->bindValue(":nome", $nome);
    $res->bindValue(":email", $email);
    $res->bindValue(":assunto", $assunto);
    $res->bindValue(":mensagem", $mensagem);
    $res->bindValue(":data", $data);
    $res->execute();

    //echo "Cadastrado com sucesso";
    echo "<script>window.location.assign('./obrigado.php')</script>";
}
