<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <div>
        <?php
        //A função stripos no PHP encontra a posição da primeira ocorrência de uma substring dentro de uma string, ignorando diferenças entre maiúsculas e minúsculas.
        $frase = "Estou aprendendo PHP";
        $pos = stripos($frase, "php");
        print "$frase<br/> Encontrado na posiçaõ $pos";
        ?>
    </div>
</body>
</html>