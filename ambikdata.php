<?php

require 'functions.php';
//apa2 variable
$students = query("SELECT * FROM student");

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

<h1>Student Data</h1>

<a href="tambahdata.php"> Add data.. </a>
<br></br>
<body>



    <table border="1" cellpadding="10" cellspaceing="0">


            <tr>
                <th>Bil.</th>
                <th>Action</th>
                <th>Name</th>
                <th>Student ID</th>
                <th>Course</th>
                <th>Email</th>
                <th>Photo</th>
            </tr>

<?php $i = 1 ; ?>

<?php //pakai foreach sbb berbentuk array ?>
<?php foreach ($students as $std) : ?>

            <tr>
            <td> <?= $i; ?> </td>
            <td> <a href="">Update </a>|
             <a href="delete.php?id=<?= $std["id"]; ?> "onclick=" return confirm('are you sure to delete this?');"> Delete </a></td>
             
            <td> <?= $std["name"]; ?> </a></td>
            <td> <?= $std["student_id"]; ?> </a></td>
            <td> <?= $std["course"]; ?> </a></td>
            <td> <?= $std["email"]; ?> </a></td>
            <td> <?= $std["photo"]; ?> </a></td>

            </tr>
   <?php $i++ ?>

<?php endforeach; ?>

    </table>

</body>

</html>