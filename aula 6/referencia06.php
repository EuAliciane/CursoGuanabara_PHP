<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <title>variáveis referenciadas</title>
</head>
<body>
    <div>
        <?php
        $a =3;
        $b = &$a;
        $b += 5;
        echo "A variável A vale $a";
        echo "<br/> A variavel B vale $b";
        // o uso do & comercial cria uma referencia a outra variável.
        //  $b = $a; fica 3 e com o & fica:  $b = &$a; = 8.
        ?>
    </div>
    
</body>
</html>