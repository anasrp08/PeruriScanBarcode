<?php
$host = 'localhost'; // Nama hostnya
$username = 'root'; // Username
$password = ''; // Password (Isi jika menggunakan password)
$database = 'barcode'; // Nama databasenya

// Koneksi ke MySQL dengan PDO
//$pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);

try{
// Koneksi ke MySQL dengan PDO
$pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
// echo "berhasil";
   }catch(PDOException $e){
// echo "gagal";
   }
?>
