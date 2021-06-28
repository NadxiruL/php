<?php
//cek jika ada data sampai atau tidak.
if (!isset($_GET["tag"]) ||
    !isset($_GET["colour"]) ||
    !isset($_GET["size"]) || 
    !isset($_GET["sleeve"]) || 
    !isset($_GET["sex"]) || 
    !isset($_GET["band"]) )  {

    //hantar balik
    header("Location: latihan1.php");

    exit;


}




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

    <ul>
        <li><?= $_GET["tag"]; ?> </li>
        <li><?= $_GET["colour"]; ?> </li>
        <li><?= $_GET["size"]; ?> </li>
        <li><?= $_GET["sleeve"]; ?> </li>
        <li><?= $_GET["sex"]; ?> </li>
        <li><?= $_GET["band"]; ?> </li>

    </ul>

    <a href="latihan1.php"> Back to home </a>

</body>

</html>