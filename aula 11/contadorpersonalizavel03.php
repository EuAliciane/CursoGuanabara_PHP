<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crie um contador personalizável</title>
</head>
<body>
    <form method="get" action="contador03.php">
        Início: <input type="number" name="inicio" max="1000" min="0" value="0"><br/>
        Final: <input type="number" name="final" max="1000" min="0" value="0">
        Intervalo:<select name="intervalo">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="20">20</option>
            <option value="50">50</option>
        </select><br/>
        <input type="submit" class="botão" value="Contar"><br/>
    </form>
</body>
</html>