<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mostrar se um eleitor é obrigado ou não a votar</title>
</head>
<body>
    <div>
        <?php
        $ano = $_GET["an"];
        $idade = 2024 - $ano;
        echo "Quem nasceu em $ano tem idade de $idade anos.";
        //http://localhost/Guanabara/relacionallogico08.php?an=1999
        $tipo = ($idade>=18 && $idade <=65)? "OBRIGATORIO" : "NÃO OBRIGATÓRIO";
        echo " <br/> Seu voto é $tipo";
        ?>
    </div>
    
</body>
</html>