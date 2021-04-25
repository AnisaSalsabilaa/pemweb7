<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<style type="text/css">
		body {
			background-color: cyan;
		}
	</style>
</body>
</html>
<h2> DAFTAR KONTAK </h2> 
<table border="1"> 
	</th><th> ID </th><th> NAMA </th><th> JENIS KELAMIN </th><th> EMAIL </th><th> ALAMAT </th><th> KOTA </th><th> PESAN </th></tr> 
	<?php
	include 'koneksi.php'; // Menghubungkan dengan koneksi.php
	$kontak = mysqli_query($koneksi, "SELECT * FROM kontak"); // Menampilkan data pada tabel kontak dengan memanggil koneksi.php
	$no=1;
	foreach ($kontak as $row) { // Melakukan perulangan pada data kontak 
		echo "<tr>
			<td>$no</td> 
			<td>".$row['nama']."</td>
			<td>".$row['jkel']."</td>
			<td>".$row['email']."</td>
			<td>".$row['alamat']."</td>
			<td>".$row['kota']."</td>
			<td>".$row['pesan']."</td>
				</tr>";
		$no++;
	}
	?>
</table>