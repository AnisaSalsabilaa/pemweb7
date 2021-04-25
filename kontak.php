<?php
include 'koneksi.php';
// Menyimpan data ke dalam variabel
$nama			= $_POST['nama'];
$jkel			= $_POST['jkel'];
$email			= $_POST['email'];
$alamat			= $_POST['alamat'];
$kota			= $_POST['kota'];
$pesan			= $_POST['pesan'];


// Query SQL untuk menambahkan data pada tabel kontak
$query = "INSERT INTO kontak (id, nama, jkel, email, alamat, kota, pesan) VALUES (1, 'Anisa Rahma', 'Perempuan', 'anisars@gmail.com', 'Waru', 'Sidoarjo', 'Semangat kuliahnya!')";
mysqli_query($koneksi, $query);

// Mengalihkan ke halaman tampilkontak.php
header("location:tampilkontak.php");

?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<style type="text/css">
		body {
			background-color: cyan;
		}
	</style>
</body>
</html>
