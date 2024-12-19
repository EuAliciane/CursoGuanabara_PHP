<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <div>
        <?php
        //Informa a posição que se encontra a primeira letra an string informada
        $frase = "Estou aprendendo PHP agora";
        $pos = strpos($frase, "PHP");
        echo "$frase<br/> A string foi encontrada na posição $pos";
        ?>
    </div>
</body>
</html>