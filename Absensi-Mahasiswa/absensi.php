<?php
include "koneksi.php";

if(isset($_POST['submit'])){
    $id = $_POST['id'];

    $cek = mysqli_query($conn,"SELECT * FROM absensi 
    WHERE mahasiswa_id='$id' AND DATE(waktu)=CURDATE()");

    if(mysqli_num_rows($cek)>0){
        $msg = "Sudah absen hari ini";
    } else {
        mysqli_query($conn,"INSERT INTO absensi VALUES('','$id',NOW(),'MANUAL','Hadir')");
        $msg = "Absensi berhasil";
    }
}
?>

<link rel="stylesheet" href="style.css">

<div class="dashboard">

    <!-- SIDEBAR -->
    <div class="sidebar">
        <h2>📚 Absensi</h2>
        <a href="dashboard.php">Dashboard</a>
        <a href="absensi.php">Absensi Manual</a>
        <a href="qrscan.php">QR Scan</a>
        <a href="laporan.php">Laporan</a>
        <a href="logout.php">Logout</a>
    </div>

    <!-- CONTENT -->
    <div class="main">

        <div class="page-card">

        <h2>Absensi Manual</h2>

        <?php if(isset($msg)) echo "<p><b>$msg</b></p>"; ?>

        <form method="post">
            <input type="text" name="id" placeholder="ID Mahasiswa">
            <button class="btn" name="submit">Absen</button>
        </form>

        </div>

    </div>

</div>