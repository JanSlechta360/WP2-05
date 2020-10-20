<?php
$i ;
$runner[0] = "Jakub Vávrů";
$runner[1] = "Štěpán Kolarovský";
$runner[2] = "Michal Plaček";
$runner[3] = "Jan Šlechta";
$runner[4] = "Martin Lédl";
$runner[5] = "Martin Kokeš";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for ($i=0; $i < 5 ; $i++) {  ?>
        Místo <?= $i + 1 ?>. <?= $runner[$i] ?> <br>
        <?php
    }

    ?>


</body>
</html>