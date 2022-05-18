<?php

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'db_pmb';

    $conn = mysqli_connect($host, $user, $pass, $db);
        if(!$conn){
            echo 'Gagal terkoneksi dengan database'.mysqli_connect_error($conn);
        }
?>