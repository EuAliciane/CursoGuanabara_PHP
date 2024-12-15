<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Situação do aluno. Calcular media do aluno.</title>
</head>
<body>
    <div>
        <?php
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $m = ($nota1+$nota2)/2;
        echo "A media entre $nota1 e $nota2 é $m <br/>";
        //calcular media http://localhost/Guanabara/situacao08.php?n1=5&n2=8
        $sit = ($m<6)?"REPROVADO":"APROVADO";
        echo "A situação do aluno é $sit";
        //ou echo "A situação do aluno é " . (($m<6)?"REPROVADO":"APROVADO");
        //tem que colocar a expressão entre parênteses.
        ?>
    </div>
    
</body>
</html>