<?php 
    require 'koneksi.php';
    session_start();
?>

<?php 
    if ( !isset($_SESSION['username']) AND !isset($_SESSION['level'])) : ?>

    <h3>Anda Harus Login Untuk Dapat Mengakses Menu Ini</h3>
    <a href="login.php">Login</a>
<?php elseif($_SESSION['level'] === 'admin'): ?>

    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Master Data</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>

<?php else: ?>

    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
<?php endif ?>

