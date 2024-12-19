<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <div>
        <?php
        //preenche uma string até um tamanho especificado com um caractere ou uma sequência de caracteres, podendo adicionar o preenchimento à esquerda, direita ou em ambos os lados da string.
        //str_pad_right
        //str_pad_center
        //str_pad_left
        $nome = "programação";
        $novo = str_pad($nome, 50, " ", STR_PAD_RIGHT);
        print("Estudar $novo é legal!");
        ?>
    </div>
</body>
</html>