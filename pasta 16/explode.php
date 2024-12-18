<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div>
        <?php
        //Quebra uma string e coloca os itens em um vetor.
        $site = "Curso em Vídeo";
        $vetor = explode(" ", $site);
        print_r($vetor);
        ?>
    </div>
</body>
</html>