<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vamos praticar o uso e variáveis de variáveis</title>
</head>
<body>
    <div>
        <?php
        $x="abc";
        $$x="def";
        echo " O conteudo da variável x e $x";
        echo " <br/> A variável ABC criada recebeu o valor de $abc";
        ?>
    </div>
    
</body>
</html>