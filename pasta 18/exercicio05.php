<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Entendo matrizes em PHP
    </title>
</head>
<body>
    <div>
        <pre>
            <?php
            $m = array( array(6,4),
                array(4,9),
                array(3,2));
            $m[0] [1] = $m[2] [0];
            print_r($m);
            ?>
        </pre>
    </div>
</body>
</html>