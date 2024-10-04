<?php
$matricula = $_GET['cod'];

        echo "Tem certeza que deseja apagar a matricula nº $matricula";
        echo "<br>";
        echo "<a href='excluir.php?cod=$matricula'><br> Sim
        </a><br>";
        echo "<a href='pg_gerenciar_estudante.php'> Não</a>";

?>