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
            //ksort ordena um array em ordem crescente com base nas suas chaves, preservando a associação chave-valor.
            //krsort ordena um array em ordem decrescente com base nas suas chaves, preservando a associação chave-valor.
            $v = array(2 =>"A", 5 =>"J", 0 =>"M", 3 =>"X", 4 =>"K");
            print_r($v);
            ksort($v);
            print_r($v);
            ?>
        </pre>
    </div>
</body>
</html>