<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>include_once</title>
</head>
<body>
    <div>
        <?php
        include_once "funcoes.php";
        echo "<h1>Testando novas funções</h1>";
        ola();
        mostraValor(5);
        echo "<h2>Finalizando Programa...</h2>";
        ?>
    </div>
</body>
</html>