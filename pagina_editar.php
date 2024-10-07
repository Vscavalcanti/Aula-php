<?php
include "conexao.php";
include "verificar_login.php";

$matricula = $_GET['cod'];

$sql = "SELECT * FROM tb_estudantes WHERE matricula_est = '$matricula'";

$consultar =$pdo->prepare($sql);

try{
    $consultar->execute();
    $resultados=$consultar ->fetch(PDO::FETCH_ASSOC);
    $nome_capturado = $resultados['nome_est'];
    $curso_capturado = $resultados['curso_est'];
    $bolsista_capturado = $resultados['est_bolsista'];
    $av_promo_capturado = $resultados['aviso_promocoes'];
    $av_cursos_capturado = $resultados['aviso_cursos'];
    $av_eventos_capturado = $resultados['aviso_eventos'];

}catch(PDOException $erro){

    echo "Falha ao consultar!" . $erro->getMessage();
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Alterar dados do estudante</h1>
<form action="atualizar.php" method="post">

<input type="text" name="matricula" value=<?php echo $matricula; ?> ><br><br>

<label for="nome_estudante">Nome:</label><br>
<input type="text" name="nome_estudante" value='<?php echo $nome_capturado ?>'> <br><BR></BR>

<label for="">Curso:</label><br>
<select name="Curso_escolhido">
    
    <option value="">Selecione</option>
    <option value="Informática" <?php echo ( $curso_capturado == 'Informática')? "selected":"";?> >Informatica</option>
    <option value="Nutrição" <?php echo ( $curso_capturado == 'Nutrição')? "selected":"";?> >Nutrição</option>
    <option value="Automação" <?php echo ( $curso_capturado == 'Automação')? "selected":"";?> >Automação</option>

</select><br><br>

<label for="">Bolsista</label><br>
<input type="radio" name="bolsista" value="Sim" <?php echo ( $bolsista_capturado == 'Sim')? 'checked':'';?>>Sim <br>
<input type="radio" name="bolsista" value="Não" <?php echo ( $bolsista_capturado == 'Não')? 'checked':'';?>>Não <br><br>

<label for="">Receber avisos?</label><br>
<input type="checkbox" name="promo" id="sim" <?php echo ($av_promo_capturado == 'Sim')? 'checked':'';?>> Promoções <br>
<input type="checkbox" name="novos_cursos" id="sim" <?php echo ($av_cursos_capturado == 'Sim')? 'checked':'';?> > Novos Cursos <br>
<input type="checkbox" name="eventos" id="sim" <?php echo ($av_eventos_capturado == 'Sim')? 'checked':'';?> > Eventos <br><br>

<button type="submit">Editar</button>
</form>


</body>
</html>