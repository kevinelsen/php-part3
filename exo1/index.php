<?php
$number = 0;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 1</title>
    </head>
    <body>
        <p>
            <?php
            while ($number < 10) {
                $number++;
                echo $number;
            }
            ?>
        </p>
    </body>
</html>
