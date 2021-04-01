<!DOCTYPE html>
<html>
<head>
	<title>Tambah Karyawan</title>
</head>
<body>
	<h1>Tambah Data Karyawan</h1>
	<form action="tambah_proses.php" method="POST">
		<div>
			<label>ID KARYAWAN</label>
			<input type="text" name="id_karyawan">
		</div>
		<div>
			<label>NAMA KARYAWAN</label>
			<input type="text" name="nama">
		</div>
		<div>
			<label>ALAMAT KARYAWAN</label>
			<textarea name="address"></textarea>
		</div>
		<div>
			<label>EMAIL KARYAWAN</label>
			<input type="text" name="email">
		</div>
		<input type="submit" name="simpan" value="Simpan">
	</form>
</body>
</html>