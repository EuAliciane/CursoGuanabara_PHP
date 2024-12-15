<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mostrar qual foi o ano anterior ao ano atual ICREMENTO E DECREMENTO</title>
</head>
<body>
    <div>
        <?php
        $atual = $_GET["aa"];
        echo "O ano atual é $atual";
        ?>
    </div>
    <div>
        <?php
        echo "O ano atual é $atual e o ano anterior é " . --$atual;
        echo "O ano atual é "
        //http://localhost/Guanabara/incremento.php?aa=2024
        ?>
    </div>
</body>
</html>