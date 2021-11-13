<?php 
    //koneksi dtabase
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "tbl_mhs";

    $koneksi = mysqli_connect($server, $user, $pass, $database)or die (mysqli_error($koneksi));

?>