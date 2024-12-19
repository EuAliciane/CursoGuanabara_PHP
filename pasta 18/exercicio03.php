<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chaves personalizadas</title>
</head>
<body>
    <div>
        <pre>
        <?php
        $v = array( 0 => 5,
                    1 => 9,
                    2 => 8,
                    3 => 7);
       // print_r($v);
       //também podemos desalocar um vetor usando o unset, exemplo: unset($v[0])
       foreach($v as $valor) {
        echo "$valor ";
       }
        ?>
        </pre>
    </div>
</body>
</html>