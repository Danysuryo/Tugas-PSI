<?php
// 1. Mengambil data variabel lingkungan otomatis dari server Railway
// Jika berjalan di laptop Anda (local), otomatis beralih ke 'localhost'
$host = getenv('PGHOST') ?: 'localhost';
$user = getenv('PGUSER') ?: 'postgres';
$pass = getenv('PGPASSWORD') ?: 'password_postgresql_lokal_kamu';
$db   = getenv('PGDATABASE') ?: 'sisfoKlinik';
$port = getenv('PGPORT') ?: '5432';

// 2. Menyusun string koneksi khusus untuk PostgreSQL
$connection_string = "host=$host port=$port dbname=$db user=$user password=$pass";

// 3. Membuka koneksi ke database
$koneksi = pg_connect($connection_string);

// 4. Cek apakah koneksi berhasil atau gagal
if (!$koneksi) {
    die("Koneksi ke database gagal dilakukan: " . pg_last_error());
}
?>
