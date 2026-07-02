<?php
include "koneksi.php";

$data = mysqli_query($conn,"
SELECT m.nim,m.nama,a.waktu,a.metode
FROM absensi a
JOIN mahasiswa m ON m.id=a.mahasiswa_id
");
?>

<link rel="stylesheet" href="style.css">

<div class="dashboard">

    <div class="sidebar">
        <h2>📚 Absensi</h2>
        <a href="dashboard.php">Dashboard</a>
        <a href="absensi.php">Absensi Manual</a>
        <a href="qrscan.php">QR Scan</a>
        <a href="laporan.php">Laporan</a>
        <a href="logout.php">Logout</a>
    </div>

    <div class="main">

        <div class="page-card">

        <h2>Laporan Absensi</h2>

        <table>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Waktu</th>
                <th>Metode</th>
            </tr>

            <?php while($d=mysqli_fetch_assoc($data)){ ?>
            <tr>
                <td><?= $d['nim'] ?></td>
                <td><?= $d['nama'] ?></td>
                <td><?= $d['waktu'] ?></td>
                <td><?= $d['metode'] ?></td>
            </tr>
            <?php } ?>

        </table>

        </div>

    </div>

</div>