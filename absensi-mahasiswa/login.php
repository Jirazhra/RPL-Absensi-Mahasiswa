<?php
session_start();
include "koneksi.php";

if(isset($_POST['login'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if($user=="admin" && $pass=="123"){
        $_SESSION['login']=true;
        header("location: dashboard.php");
    } else {
        echo "<script>alert('Login gagal!')</script>";
    }
}
?>

<link rel="stylesheet" href="style.css">

<div class="login-container">

    <!-- KIRI -->
    <div class="login-left">
        <h1>Sistem Absensi Mahasiswa</h1>
        <p>Login untuk mengakses dashboard admin</p>
    </div>

    <!-- KANAN -->
    <div class="login-right">

        <div class="login-box">
            <h2>Login Admin</h2>

            <form method="post">
                <input type="text" name="user" placeholder="Username">
                <input type="password" name="pass" placeholder="Password">
                <button name="login">Login</button>
            </form>

        </div>

    </div>

</div>