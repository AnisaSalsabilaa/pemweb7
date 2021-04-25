<!DOCTYPE html>
<html>
<head>
	<title> Form Input </title> 
</head>
<body>
	<style type="text/css">
		body {
			background-color: cyan;
		}
	</style>
	<h2> FORM TAMBAH KONTAK </h2>
	<form method="post" action="simpankontak.php"> 
		<table>
			<tr><td> NAMA </td><td><input type="text" name="nama"></td></tr>
			<tr><td> JENIS KELAMIN </td><td>
				<input type="radio" name="jkel" value="Laki-laki"> Laki-laki
				<input type="radio" name="jkel" value="Perempuan"> Perempuan 
			</td></tr>
		<tr><td> EMAIL </td><td><input type="text" name="email"></td></tr>
		<tr><td> ALAMAT </td><td><input type="text" name="alamat"></td></tr>
		<tr><td> KOTA </td><td><input type="text" name="kota"></td></tr>
		<tr><td> PESAN </td><td><textarea name="pesan" cols="45" rows="5"></textarea></td></tr>
		<tr><td colspan="2"><button type="submit" value="simpan"> SIMPAN </button></td></tr>
		</table>
	</form>	
</body>
</html>