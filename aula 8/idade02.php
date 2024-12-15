<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Continuação do exercíceio de idade</title>
</head>
<body>
    <div>
        <?php
        $nome = isset ($_GET["nome"]) ? $_GET["nome"]:"[nao informado]";
        $ano = isset ($_GET["ano"]) ? $_GET["ano"]:0;
        $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[sem sexo]";
        $idade = date("Y") - $ano;
        echo "$nome é $sexo e tem $idade anos.";
        ?>
        <a href="anodenascimento02.html">Voltar</a>
    </div>
</body>
</html>