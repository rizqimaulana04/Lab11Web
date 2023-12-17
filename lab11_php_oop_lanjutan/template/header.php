<?php
include("koneksi.php");
include("config.php");

// query untuk menampilkan data
$sql = 'SELECT * FROM mahasiswa';
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Praktikum 10</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="container">
        <header>
            <h1>Pendefinisian Class dan Pemanggilan Class</h1>
        </header>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="kontak.php">Contact</a>
        </nav>