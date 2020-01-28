<?php
/**
 * Created by PhpStorm.
 * User: stanley
 * Date: 28-1-2020
 * Time: 09:16
 */
$boodschappen = ["aardappelen", "aardbeien", "3 pakken melk", "yoghurt"];





?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div >
    <h3>Wat moet ik kopen:</h3>
    <ul>
        <?php
        for ($i = 0; $i <4; $i++) {
            echo "<li>$boodschappen[$i]</li>";
        }
        ?>

    </ul>
</div>
</body>
</html>
