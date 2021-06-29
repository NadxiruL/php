<?php
require 'functions.php';

$id = $_GET["id"];

if ( hapus ($id) > 0 ) {

    
    echo " <script>alert('data successfully deleted !');
    document.location.href = 'ambikdata.php';
   </script>";


} else {

    echo " <script>alert('data deletion unsuccesful !');
    document.location.href = 'ambikdata.php';
    </script>";


}



?>
