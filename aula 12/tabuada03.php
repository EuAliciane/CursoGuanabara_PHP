<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tabuada</title>
</head>
<body>
    <div>
        <form method="get" action="tabuada.php">
            
          Numero:  <select name="numero">
                <?php
                $valor=1;
                while ($valor <= 10) {
                echo "<option value='$valor'>$valor</option>";
                $valor++;
                }
                ?>
            </select>
            <input type="submit" class="botao" value="Calcular">
        </form>
    </div>
</body>
</html>