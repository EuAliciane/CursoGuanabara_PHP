<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <title>Operadores Unários/ Permirtir que o usuário escolha entre somar e multiplicar dois números</title>
</head>
<body>
    <div>
        <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["op"];
        echo "Os valores passados foram $n1 e $n2 ";
        //http://localhost/Guanabara/operadorununario08.php?a=5&b=3&op=s
        // S simboliza soma, caso deseje multiplicar substituir por M ao passar os parâmetros
        $r = ($tipo =="s") ?$n1+$n2:$n1*$n2;
        echo "<br/> O resultado será $r";
        ?>
    </div>
    
</body>
</html>