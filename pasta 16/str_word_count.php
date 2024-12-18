<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <div>
        <?php
        //Conta quantas palavras uma string possui.
        //Esta função pode contar (0)
        //Esta função pode gerar um vetor (1)
        //Pode gerar um vetor mantendo o posicionamento de cada palavra dentro da string (2)
        $frase = "Eu vou estudar PhP";
        $cont = str_word_count($frase, 0);
        echo $cont;
        ?>
    </div>
</body>
</html>