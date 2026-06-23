<?php

$host = "localhost";
$port = "5432";
$dbname = "SIsfoKlinik";
$username = "postgres";
$password = "Danysuryo&14";

try {
    $conn = new PDO(
        "pgsql:host=$host;port=$port;dbname=$dbname",
        $username,
        $password
    );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    die("Koneksi gagal : " . $e->getMessage());

}