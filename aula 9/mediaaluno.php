<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Continuação media do aluno</title>
</head>
<body>
    <div>
        <?php
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $m = ($nota1+$nota2)/2;
        if($m <=5)  {
            $mString = "REPROVADO";
        }
        else {
            if (($m<=6.99)) {
            $mString = "RECUPERAÇÃO";
            }
            else {
                $mString = "APROVADO";
            }
        }
        echo "A media entre $nota1 e $nota2 é $m <br/>";
        echo "Situação do aluno é $mString ";
        ?>
    </div>
</body>
</html>