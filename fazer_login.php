<?php

include "conexao.php";

$u = $_POST['usuario_digitado'];
$s = $_POST['senha_digitada'];

$sql = "SELECT * FROM tb_usuarios WHERE 
usuario='$u' AND senha='$s'";

$consultar =$pdo->prepare($sql);

try{   
    $consultar->execute();
    $resultado = $consultar->fetch(PDO::FETCH_ASSOC);
    
    if($resultado){
        session_start();
        $_SESSION['logado']= "Sim";
        header("Location: index.php");
    }else{
        header("Location:login.php?erro=1");
    }
}catch(PDOException $erro){
    echo"Falha no login". $erro->getMessage();
}

?>