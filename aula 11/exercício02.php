<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Criar dinamicamente 5 caixas de texto em um formulário</title>
</head>
<body>
    <form method="get" action="02-parte02.php">
        <?php
        $c = 1;
        while ($c<=5) {
        echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'/><br/>";
        $c++;
        }
        ?>
        <input type="submit" value="Enviar" class="botao"/>
    </form>
</body>
</html>