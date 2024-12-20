<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quais são as funções dos vetores em PHP?</title>
</head>
<body>
    <div>
        <pre>
        <?php
        $v = array("A", "J", "M", "X", "K");
        $tot = count($v);
        echo "O vetor tem $tot elementos</br>";
        //echo "O vetor tem " . count($v) . " elementos</br>";
        print_r($v);
        var_dump($v);
        ?>
        </pre>
    </div>
</body>
</html>