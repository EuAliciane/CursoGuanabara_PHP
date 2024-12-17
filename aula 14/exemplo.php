<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>.</title>
</head>
<body>
    <div>
        <?php
        function soma ($a, $b) {
            $s = $a + $b;
            echo "O resultado é: $s ";
            return $s;
        }
        $res = soma(3, 4)
        ?>
    </div>
</body>
</html>