<?php

$conn = mysqli_connect("localhost", "root", "", "college");

//cek jika button submit dah ditekan atau belom..

if(isset($_POST["submit"])) {

    //ambil data yang ditulis dari setiap fields.
    $name = $_POST["name"];
    $studentid = $_POST["studentid"];
    $email = $_POST["email"];
    $course = $_POST["course"];
    $photo = $_POST["photo"];

    
    //query statement untuk insert data

    $query = "INSERT INTO student VALUES ('' , '$name' , '$studentid' , '$email' , '$course' , '$photo')" ;

    mysqli_query($conn , $query);

    //cek adakah data berjaya dimasukkan

    if ( mysqli_affected_rows($conn)) {

        echo "berjaya!";

    } else 

    echo "gagal!";

}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>Add Student Data.</h1>
<body>


    <form action="" method="post">
        <ul>
            <li>
                <label for="name">Name : </label>
                <input type="text" name="name" id="name">
            </li>
            <li>
                <label for="studentid">Student Id : </label>
                <input type="text" name="studentid" id="studentid">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="course">Course : </label>
                <input type="text" name="course" id="course">
            </li>
            <li>
                <label for="photo">Photo : </label>
                <input type="text" name="photo" id="photo">
            </li>

            <button type="submit" name="submit">Insert!</button>

        </ul>
 
    </form>




</body>

</html>