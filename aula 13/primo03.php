<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Continuação do exercício de verificação de números primos</title>
</head>
<body>
    <div>
        <?php
        $numero = isset($_GET['numero'])?$_GET['numero']:"[valor não definido]";
        $contador = 0;
        echo "<h3>Analisando o número $numero...</h3>";
        echo "Valores múltiplos: ";
        for($i=1; $i <= $numero; $i++) {
            if($numero % $i == 0) { //verificação se o número pode ser dividido sem deixae resto
                $valoresMultiplos = $i;//aqui ele guardará a informação se é divisível é verdadeira
                $contador++;
                echo "$valoresMultiplos ";
            }
        }
        echo "<p>Total de múltiplos: $contador</p>";
        if($contador == 2) {
            echo "<p>Resultado: <span class='foco'>$numero É PRIMO </span></p>";
        }else{
            echo "<p>Resultado: <span class='foco'>$numero NÃO É PRIMO </span></p>";
        }
        ?>
    </div>
</body>
</html>