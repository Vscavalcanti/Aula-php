<?php
include "conexao.php";  
include "verificar_login.php";
// guardar os dados recebidos
$nome = $_POST['nome_estudante'];
$curso = $_POST['Curso_escolhido'];
$bolsista = $_POST['bolsista'];
$promocoes;
$novos_cursos;
$eventos;

if(isset($_POST['promo'])){
    $promocoes = "Sim";
}else{
    $promocoes = 'Não';
}

if(isset($_POST['novos_cursos'])){
    $novos_cursos = "Sim";
}else{
    $novos_cursos = 'Não';
}

if(isset($_POST['eventos'])){
    $eventos = "Sim";
}else{
    $eventos = 'Não';
}

$sql = "insert into tb_estudantes
(nome_est, est_bolsista, aviso_promocoes, aviso_cursos, aviso_eventos, curso_est) values
('$nome','$bolsista','$promocoes','$novos_cursos','$eventos','$curso')";

$inserir = $pdo->prepare($sql);

try{
    $inserir->execute();
    echo "Cadastrado com sucesso!";
    echo "<br> <a href='index.html'>Voltar ao Inicio</a>";
}catch(PDOException $erro){
    echo "falha ao inserir!". $erro->getMessage();
}


?>