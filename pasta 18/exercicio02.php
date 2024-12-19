<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Utilizando RANGE</title>
</head>
<body>
    <div>
        <pre>
        <?php
        //usado para gerar uma sequência de valores em um intervalo específico, facilitando a criação de estruturas ordenadas de dados.
        $c = range(5,20,2);
        //print_r($c);
        foreach($c as  $v) {
            echo "$v ";
        }
        ?>
        </pre>
    </div>
</body>
</html>