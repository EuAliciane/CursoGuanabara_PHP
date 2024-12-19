<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <div>
        <?php
        //Conta quantas vezes uma determinada string foi encontrada
        $frase = "Estou aprendendo PHP no Curso em Vídeo de PHP";
        $cont = substr_count($frase, "PHP");
        print("PHP encontrado $cont vezes");
        ?>
    </div>
</body>
</html>