<?php
include 'koneksi.php';
// Menyimpan data ke dalam variabel
$nama			= $_POST['nama'];
$jkel			= $_POST['jkel'];
$email			= $_POST['email'];
$alamat			= $_POST['alamat'];
$kota			= $_POST['kota'];
$pesan			= $_POST['pesan'];

// Query SQL untuk insert data
$query = "INSERT INTO kontak SET nama='$nama', jkel='$jkel', email='$email', alamat='$alamat', kota='$kota', pesan='$pesan'";
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