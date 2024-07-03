<?php
$dbHost = '192.168.0.100';
$dbName = 'rizzdehe_game_account_store';
$dbUser = 'rizzdehe_game_account_store';
$dbPass = 'dyosrpfhp123';

// Buat koneksi
$conn = new mysqli($dbHost, $dbname, $dbUser, $dbPass);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
