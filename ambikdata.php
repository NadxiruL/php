<?php

require 'functions.php';

query("SELECT * FROM student");

//ambil data dari database college dari table mana mana.
//$result = mysqli_query($conn, " SELECT * FROM student ");

// logik cek error db atau tidak.

/*if (!$result) {

    echo mysqli_error($conn);
}*/

//ambik data (fetch) dari table student
//mysqli_fetch_row() //  mengembalikan array numeric | array yang index nya nmber .
//mysqli_fetch_array() //mengembalikan data berbentuk numeric dan assoc. size jadi besar
//mysqli_fetch_assoc() // mengembalikan data berbentuk array associative.
//mysqli_fetch_object() // x pakai .. mengembalikan data berbentuk object ->course

/*while ($student = mysqli_fetch_assoc($result)) {


} */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMBIK DATA</title>
</head>

<body>

    <table border="1" cellpadding="10" cellspaceing="0">


            <tr>
                <th>Bil.</th>
                <th>Name</th>
                <th>Student ID</th>
                <th>Course</th>
                <th>Email</th>
                <th>Photo</th>
            </tr>

<?php $i = 1 ; ?>

<?php while ($student = mysqli_fetch_assoc($result)) : ?>
            <tr>
            <td> <?= $i; ?> </td>
            <td> <a href="">Update | Delete </a></td>
            <td> <?= $student["name"]; ?> </a></td>
            <td> <?= $student["course"]; ?> </a></td>
            <td> <?= $student["email"]; ?> </a></td>
            <td> <?= $student["photo"]; ?> </a></td>
            </tr>
   <?php $i++ ?>

<?php endwhile; ?>

    </table>

</body>

</html>