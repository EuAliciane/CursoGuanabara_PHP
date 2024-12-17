<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>usando require_once</title>
</head>
<body>
<div>
        <?php
        require_once "funcoes.php";
        echo "<h1>Testando novas funções</h1>";
        ola();
        mostraValor(4);
        echo "<h2>Finalizando Programa...</h2>";
        ?>
    </div>
</body>
</html>