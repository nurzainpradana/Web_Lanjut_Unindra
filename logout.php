<?php

    session_start();
    session_destroy();
    echo "<script> alert('Anda Telah Keluar dari menu'); window.location = 'login.php'; </script>";

?>