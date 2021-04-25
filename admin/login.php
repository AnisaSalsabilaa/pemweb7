<?php 
// Mengaktifkan session php
session_start();
 
// Menghubungkan dengan koneksi
include 'koneksi.php';
 
// Menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// Menyeleksi data admin dengan username dan password yang sesuai
$result = mysqli_query($koneksi,"SELECT * FROM admin where username='$username' and password='$password'");

$cek = mysqli_num_rows($result);
 
if($cek > 0) {
    $data = mysqli_fetch_assoc($result);
    // Menyimpan session username dan password
    $_SESSION['username'] = $username;
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['status'] = "sudah_login";
    $_SESSION['id_login'] = $data['id'];
    header("location:cetak.php");
} else {
    header("location:index.php?pesan= Gagal login data tidak ditemukan !");
}
?>