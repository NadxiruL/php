<?php

//connection ke database.
$conn = mysqli_connect("localhost", "root", "", "college");

//function query akan menerima string query dari page ambik data (SELECT * FROM student)
//tangkap di parameter
function query($query)
{

    global $conn;    
    
                                  //string query & stmt SELECT * from
    $result = mysqli_query($conn, $query);

    //siapkan satu bekas yang bernama $student apa2 dgn array kosong.
    $students = [];

    //ambil data melalui looping
    while ($std = mysqli_fetch_assoc($result)) {
    $students [] = $std;

    }

    //kembalikan bekas tersebut
    return $students;
}

                //menerima input berupa data , atau namakan apa apa pon boleh..
function addData($data){

    //sebab kita pakai parameter kat ats so kita pakai data juga kat bawah.
    //form post dari  tambah data akan ditangkap oleh function ini..
    //ambil data yang ditulis dari setiap fields.

    global $conn;

    $name = htmlspecialchars($data["name"]);
    $studentid = htmlspecialchars($data["studentid"]);
    $email = htmlspecialchars($data["email"]);
    $course = htmlspecialchars($data["course"]);
    $photo = htmlspecialchars($data["photo"]);

    
    
    
    //query statement untuk insert data

    $query = "INSERT INTO student VALUES ('' , '$name' , '$studentid' , '$email' , '$course' , '$photo')" ;

    mysqli_query($conn , $query);


    return mysqli_affected_rows($conn);


}


function hapus($id) {

    global $conn ;

    mysqli_query($conn , "DELETE FROM student WHERE id = $id");

    return mysqli_affected_rows($conn);

}