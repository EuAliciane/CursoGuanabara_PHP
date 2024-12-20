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
            $v = array("A", "J", "M", "X", "K");
            print_r($v);
            array_pop($v);
            //array_push adiciona um ou mais elementos ao final de um array, expandindo-o dinamicamente.
            //array_pop remove e retorna o último elemento de um array, reduzindo seu tamanho.
            print_r($v)
            ?>
        </pre>
    </div>
</body>
</html>