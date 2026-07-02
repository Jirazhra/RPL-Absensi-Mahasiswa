<?php
session_start();
if(!isset($_SESSION['login'])){
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Absensi</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="dashboard">

    <!-- SIDEBAR -->
    <div class="sidebar">
        <h2>📚 Absensi</h2>

        <a href="dashboard.php">Dashboard</a>
        <a href="absensi.php">Absensi Manual</a>
        <a href="qrscan.php">QR Scan</a>
        <a href="laporan.php">Laporan</a>
        <a href="logout.php" class="logout">Logout</a>
    </div>

    <!-- MAIN -->
    <div class="main">

        <h1>Dashboard</h1>
        <p>Selamat datang di sistem absensi mahasiswa</p>

        <!-- CARD -->
        <div class="card-grid">

            <div class="card blue">
                <h3>Total Mahasiswa</h3>
                <p>120</p>
            </div>

            <div class="card green">
                <h3>Hadir Hari Ini</h3>
                <p>45</p>
            </div>

            <div class="card orange">
                <h3>Belum Absen</h3>
                <p>67</p>
            </div>

        </div>

    </div>

</div>

</body>
</html>