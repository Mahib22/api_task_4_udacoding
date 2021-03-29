<?php

    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('DB', 'task_4_udacoding');

    $con = mysqli_connect(HOST, USER, PASS, DB) or die('Koneksi Gagal');

?>