<?php

//connection ke database.
$conn = mysqli_connect("localhost", "root", "", "college");

function query($query)
{

    global $conn;
    $result = mysqli_query($conn, $query);
    $students = [];

    while ($student = mysqli_fetch_assoc($result)) {
    $stundets [] = $student [];

    }

    return $students;
}
