<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <div>
        <?php
        //Retorna uma parte de uma string, começando em uma posição especificada e opcionalmente com um comprimento definido.
        $site = "Curso em Video";
        $sub = substr($site, 0, 5);
        echo "$sub ";
        ?>
    </div>
</body>
</html>