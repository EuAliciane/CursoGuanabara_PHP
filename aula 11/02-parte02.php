<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Continuação do exercício 02</title>
</head>
<body>
    <div>
        <?php
        $i = 1;
        while ($i <= 5) {
            $v = "num".$i;
            $url="v".$i;
            $$v = isset($_GET[$url])?$_GET[$url]:0;
            $i++;
        }
        $i = 1;
        while ($i <= 5) {
            $v = "num".$i;
            echo "Valor $i : " . $$v . "<br/>";
            $i++;
        }
        //echo "$num1 $num2 $num3 $num4 $num5";
        ?>
    </div>
</body>
</html>