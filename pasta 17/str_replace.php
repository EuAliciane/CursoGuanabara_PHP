<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <div>
        <?php
        //substitui todas as ocorrências de uma substring por outra em uma string ou em um array de strings.
        $frase = "Gosto de estudar Matemática";
        $novafrase = str_replace("Matematica", "PHP", $frase);
        echo "$novafrase";
        ?>
    </div>
</body>
</html>