<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Continuação do exercício Idade e Vota</title>
</head>
<body>
    <div>
        <?php
        $a = isset($_GET ["ano"]) ?$_GET["ano"]:1900;
        $i=date("Y") - $a;
        echo "Você nasceu em $a e terá $i anos";
        if ($i >= 18) {
            $v = "já pode votar";
            $d = "já pode dirigir";
        }
        else {
            $v = "não pode votar";
            $d = "não pode dirigir";
        }
        echo "<br/>Com essa idade você $v e também $d";
        ?>
    </div>
</body>
</html>