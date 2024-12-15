<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ler estado</title>
</head>
<body>
    <div>
        <?php
        $estado = isset($_GET["estado"])?$_GET["estado"]:0;
        switch ($estado) {
            case "AC":
            case "AP":
            case "AM":
            case "PA":
            case "RO":
            case "RR":
            case "TO":
                $regiao = "Região Norte";
                break;
            case "AL":
            case "BA":
            case "CE":
            case "MA":
            case "PB":
            case "PE":
            case "PI":
            case "RN":
            case "SE":
                $regiao = "Região Nordeste";
                break;
            case "DF":
            case "GO":
            case "MT":
            case "MS":
                $regiao = "Região Centro-Oeste";
                break;
            case "ES":
            case "MG":
            case "RJ":
            case "SP":
                $regiao = "Região Sudeste";
                break;
            case "PR":
            case "RS":
            case "SC":
                $regiao = "Região Sul";
                break;
            default:
                $regiao = "Região Inválida";
        }
        echo "Você mora na $regiao.";
        ?>
        <br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>
</html>