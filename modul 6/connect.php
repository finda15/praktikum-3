<?php
    //sesuiakan dengan username dan password mysqli 

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'db_moklet';

    $connect = mysqli_connect($host, $user, $pass, $db);

    if(!$connect) {
        exit('Koneksi Gagal');
    }
?>