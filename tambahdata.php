<?php

require 'functions.php';

//cek jika button submit dah ditekan atau belom..

if(isset($_POST["submit"])) {

    //cek adakah data berjaya dimasukkan
    if (addData($_POST) > 0 ) {

        echo " <script>alert('data successfully added !');
                document.location.href = 'ambikdata.php';
               </script>";
    
    } else

    echo " <script>alert('data unsuccessfully added !');
                document.location.href = 'ambikdata.php';
               </script>";

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
                <input type="text" name="name" id="name" required>
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