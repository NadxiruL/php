<?php

//variable scope

$x = 10 ;

function test(){

    global $x;
    echo $x;

}

test();

echo " <br> " ;

function test2(){
    $x = 11 ;

    echo $x;

}

test2();