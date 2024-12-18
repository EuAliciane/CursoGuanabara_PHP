<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Conhecendo print_r</title>
</head>
<body>
    <div>
        <?php
        $v[0] = 4;
        $v[1] = 8;
        $v[2] = 3;
        print_r($v);
        echo"</br>";
        $v2 = array(3, 7, 6, 2, 1, 9);
        print_r($v2);
        ?>
    </div>
</body>
</html>