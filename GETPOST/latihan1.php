<?php

$bajus = [
    [
        "tag" => "FRUIT OF THE LOOM",
        "colour" => " BLUE ",
        "size" => "S",
        "sleeve" => "SHORT",
        "sex" =>  "MALE",
        "band" =>  "OASIS"

    ],

    [
        "tag" => "BAY ISLAND",
        "colour" => " BLACK ",
        "size" => "S",
        "sleeve" => "SHORT",
        "sex" =>  "FEMALE",
        "band" =>  "SUEDE"

    ]

];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>

    <?php foreach ($bajus as $baju) : ?>

        <ul>
            <li>
               <a href="latihan2.php?band=<?= $baju["band"]; ?>&size=<?= $baju["size"]; ?>&sleeve=<?= $baju["sleeve"]; ?>&sex=<?= $baju["sex"]; ?>&tag=<?= $baju["tag"]; ?>&colour=<?= $baju["colour"]; ?>"> <?= $baju["band"]; ?> </a>
            </li>
        </ul>



    <?php endforeach; ?>

</body>

</html>