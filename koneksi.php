<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'web2';

    $conn = new mysqli($server, $username, $password, $database);

    if ($conn->connect_error) {
        die('Gagal Terhubung '.$conn->connection_error);
    } else {
        echo '<h3>Berhasil Terhubung</h3>';
    }
?>