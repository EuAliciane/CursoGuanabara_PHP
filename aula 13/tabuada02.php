<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Faça uma tabuada do 1 ao 10</title>
</head>
<body>
    <div>
        <form method="get" action="tabuadaresultado.php">
            <select name="num">
                <?php
                for($c=1; $c<=10; $c++) {
                    echo "<option>$c</option>";
                }
                ?>
            </select>
            <input type="submit" class="botao" value="Tabuada">
        </form>
    </div>
</body>
</html>