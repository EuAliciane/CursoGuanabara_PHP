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
            array_unshift($v, "H");
            //array_shift remove e retorna o primeiro elemento de um array, reindexando os demais elementos.
            //array_unshift adiciona um ou mais elementos no início de um array, deslocando os índices dos elementos existentes.
            print_r($v)
            ?>
        </pre>
    </div>
</body>
</html>