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
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Lista de estudantes matriculados</h1>
    <?php
    include "conexao.php";

    $sql = "select * from tb_estudantes";

    $consultar = $pdo->prepare($sql);

    try{
        $consultar->execute();
        $resultados = $consultar->fetchAll(PDO::FETCH_ASSOC);
        foreach($resultados as $item){
            echo "<div class='cartoes'>";
                echo "<b>Matricula: </b>";
                echo $item['matricula_est'];
                echo "<br>";
                echo "<b>Nome: </b>";
                echo $item['nome_est'];
                echo "<br>";
                echo "<b>Curso: </b>";
                echo $item['curso_est'];
                echo "<br>";
                echo "<b>Bolsista: </b>";
                echo $item['est_bolsista'];
                echo "<br>";
                echo "<b>Preferencia de avisos</b><br>";
                echo "<b>Promocoes: </b>";
                echo $item['aviso_promocoes'];
                echo "<br>";
                echo "<b>Cursos: </b>";
                echo $item['aviso_cursos'];
                echo "<br>";
                echo "<b>Eventos: </b>";
                echo $item['aviso_eventos'];
                echo "<br><br><br>";

                $matricula = $item ['matricula_est'];
                    echo "<a href='pagina_deletar.php?cod=$matricula'>"; 
                echo "<button>🗑Deletar</button>";
                    echo"</a>";
    
            echo "<a href='pagina_editar.php?cod=$matricula'>"; 
                echo "<button>✏Editar</button>";
                    echo"</a>";
            echo "</div>";
        }
        
    }catch(PDOException $erro){
        echo "Falha ao consultar!". $erro->getMessage();
    }

    ?>
</body>
</html>