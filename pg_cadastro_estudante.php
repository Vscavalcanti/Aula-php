<?php   
include "verificar_login.php";
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
    <h1>Cadastrar estudante</h1>
<form action="inserir.php" method="post">

<label for="nome_estudante">Nome:</label><br>
<input type="text" name="nome_estudante"> <br><BR></BR>

<label for="">Curso:</label><br>
<select name="Curso_escolhido">
    
    <option value="">Selecione</option>
    <option value="Informática">Informática</option>
    <option value="Nutrição">Nutrição</option>
    <option value="Automação">Automação</option>

</select><br><br>

<label for="">Bolsista</label><br>
<input type="radio" name="bolsista" value="Sim">Sim <br>
<input type="radio" name="bolsista" value="Não">Não <br><br>

<label for="">Receber avisos?</label><br>
<input type="checkbox" name="promo" id="sim"> Promoções <br>
<input type="checkbox" name="novos_cursos" id="sim"> Novos Cursos <br>
<input type="checkbox" name="eventos" id="sim"> Eventos <br><br>

<button type="submit">Cadastrar</button>
</form>


</body>
</html>