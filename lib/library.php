<?php
    include 'lib/lib.php';

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'db_pembayaranspp';

    $mysqli = mysqli_connect($host, $user, $pass, $db) 
    or die('Tidak dapat koneksi ke DB');

    ?>