<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Faça várias contagens utilizando a estrutura For</title>
</head>
<body>
    <div>
        <?php
        for($c=1; $c<=10; $c++) {
            echo "$c ";
        }
        echo "</br>";
        for($c=10; $c>=1; $c--) {
            echo "$c ";
        }
        echo "</br>";
       for($c=0; $c<=50; $c+=5){
           echo "$c ";
        }
        echo "</br/>";
        for($c=20; $c>=0; $c-=2) {
            echo "$c ";
        }
        ?>
    </div>
</body>
</html>