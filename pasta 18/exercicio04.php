<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chaves associativas</title>
</head>
<body>
    <div>
        <pre>
            <?php
            $cad = array("nome" => "Maria",
                    "idade" => "25",
                    "sexo" => "feminino");
                    $cad["fuma"] = true;
            foreach($cad as $valor => $c) {
                echo " O campo $valor possui o conteúdo $c";
            }
            ?>
        </pre>
    </div>
</body>
</html>