<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <div>
        <?php
        $nome = "   José da Silva   ";
        echo (strlen( $nome));
        echo "</br>";
        $novo = trim($nome);
        echo($novo);
        echo "</br>";
        echo(strlen($novo));
        //Elimina espaços em branco antes e depois de uma string.
        ?>
    </div>
</body>
</html>