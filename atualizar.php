<?php
include "conexao.php";
// guardar os dados recebidos
$mat= $_POST['matricula'];
$nome = $_POST['nome_estudante'];
$curso = $_POST['Curso_escolhido'];
$bol = $_POST['bolsista'];
$pro =(isset($_POST['promo']))? "Sim":"Não";
$n_cursos = (isset($_POST['novos_cursos']))? "Sim":"Não";
$eve= (isset($_POST['eventos']))? "Sim":"Não";

$sql = "UPDATE tb_estudantes SET
nome_est ='$nome', 
est_bolsista ='$bol', 
aviso_promocoes ='$pro', 
aviso_cursos ='$n_cursos', 
aviso_eventos ='$eve', 
curso_est ='$curso' WHERE matricula_est='$mat'";


$atualizar = $pdo->prepare($sql);

try{
    $atualizar->execute();
    echo "Atualizado com sucesso!";
    echo "<br> <a href='index.html'>Voltar ao Inicio</a>";
}catch(PDOException $erro){
    echo "falha ao inserir!". $erro->getMessage();
}


?>