<?php
include "koneksi.php";

if(isset($_POST['code'])){
    $code = $_POST['code'];

    $data = mysqli_query($conn,"SELECT * FROM mahasiswa WHERE qr_code='$code'");
    $mhs = mysqli_fetch_assoc($data);

    if($mhs){
        mysqli_query($conn,"INSERT INTO absensi VALUES('','".$mhs['id']."',NOW(),'QR','Hadir')");
        $msg = "Berhasil: ".$mhs['nama'];
    } else {
        $msg = "QR tidak valid";
    }
}
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

        <h2>QR Scan Absensi</h2>

        <?php if(isset($msg)) echo "<p><b>$msg</b></p>"; ?>

        <form method="post">
            <input type="text" name="code" placeholder="Masukkan QR Code">
            <button class="btn">Submit</button>
        </form>

        </div>

    </div>

</div>