<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>lifo last in first out</title>
</head>
<body>
    <div>
        <pre>
            <?php
            //sort organiza os elementos de um array em ordem crescente, reindexando-os numericamente.
            //rsort organiza de forma reversa
            //asort ordena os elementos de um array em ordem crescente, preservando as chaves associativas.
            //arsort ordena os elementos de um array em ordem decrescente, preservando as chaves associativas.
            //ksort ordena um array em ordem crescente com base nas suas chaves, preservando a associação chave-valor.
            $v = array("A", "J", "M", "X", "K");
            print_r($v);
            sort($v);
            print_r($v)
            ?>
        </pre>
    </div>
</body>
</html>