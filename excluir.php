<?php
include "conexao.php";

$matricula = $_GET['cod'];

$sql = "DELETE FROM tb_estudantes WHERE matricula_est = '$matricula'";

$deletar = $pdo->prepare($sql);

try{
    $deletar->execute();
    echo "Deletado com sucesso!<br><br>";
    echo "<a href='pg_gerenciar_estudante.php'>Voltar</a>";

}catch(PDOException $erro){
    echo "Falha ao deletar!" . $erro->getMessage();

}


?>