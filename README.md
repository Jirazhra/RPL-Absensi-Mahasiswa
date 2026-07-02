# Sistem Absensi Mahasiswa Berbasis Web

Sistem Absensi Mahasiswa Berbasis Web adalah aplikasi sederhana yang dibuat menggunakan **PHP Native**, **MySQL**, HTML, dan CSS. Sistem ini membantu administrator mencatat kehadiran mahasiswa melalui absensi manual maupun simulasi QR Code, lalu menampilkan laporan absensi secara otomatis.

> Catatan: Fitur QR Code pada versi ini masih berupa **simulasi input kode unik mahasiswa**, belum menggunakan pemindaian kamera secara langsung.

---

## Fitur Utama

- Login admin
- Dashboard admin dengan tampilan modern
- Absensi manual menggunakan ID mahasiswa
- Simulasi absensi QR Code menggunakan kode unik mahasiswa
- Validasi agar mahasiswa tidak dapat absen lebih dari satu kali dalam sehari
- Laporan absensi mahasiswa
- Tampilan antarmuka berbasis CSS dengan tema dashboard modern
- Penyimpanan data menggunakan database MySQL

---

## Teknologi yang Digunakan

| Teknologi | Kegunaan |
|---|---|
| PHP Native | Backend dan proses sistem |
| MySQL | Penyimpanan data mahasiswa dan absensi |
| HTML | Struktur halaman web |
| CSS | Tampilan antarmuka sistem |
| XAMPP | Web server lokal dan database MySQL |
| GitHub | Penyimpanan source code proyek |

---

## Struktur Folder

```text
absensi-mahasiswa/
│
├── index.php
├── login.php
├── dashboard.php
├── absensi.php
├── qrscan.php
├── laporan.php
├── logout.php
├── koneksi.php
├── style.css
└── README.md
