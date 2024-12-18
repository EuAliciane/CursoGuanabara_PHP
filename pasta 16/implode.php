<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <div>
        <?php
        //Transforma um vetor inteiro em uma string.
        //implode também pode ser substituido por join()
        $vetor[0] = "Curso";
        $vetor[1] = "em";
        $vetor[2] = "Vídeo";
        $texto = implode("#", $vetor);
        print($texto);
        ?>
    </div>
</body>
</html>