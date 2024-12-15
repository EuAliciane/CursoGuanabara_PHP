<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $text =isset($_GET["t"])?$_GET["t"] : "Texto Generico";
    $tam =isset ($_GET["tam"])?$_GET["tam"]:"12pt";
    $cor =isset($_GET["cor"])?$_GET["cor"]:"#000000";
    ?>
    <meta charset="UTF-8">
    <title>Continuação do exercicio de texto</title>
    <style>
    span.texto {
        font-size: <?php echo $tam; ?>;
        color: <?php echo $cor; ?>;
    }
    </style>
</head>
<body>
    <div>
        <?php
        echo "<span class='texto'>$text</span>";
        ?>
    </div>
</body>
</html>