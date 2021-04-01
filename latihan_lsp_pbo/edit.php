<?php
// masukkan file ModelKaryawan.php
require_once 'model/ModelKaryawan.php';
// buat object karyawan
$karyawan = new ModelKaryawan();
$data = $karyawan->baca_data_edit($_GET['id']);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Karyawan</title>
</head>
<body>
	<h1>Edit Data Karyawan</h1>
	<form action="edit_proses.php" method="POST">
		<div>
			<label>ID KARYAWAN</label>
			<input type="text" name="id_karyawan" value="<?= $data['id_karyawan'] ?>" readonly>
		</div>
		<div>
			<label>NAMA KARYAWAN</label>
			<input type="text" name="nama" value="<?= $data['nama'] ?>">
		</div>
		<div>
			<label>ALAMAT KARYAWAN</label>
			<textarea name="alamat"><?= $data['alamat'] ?></textarea>
		</div>
		<div>
			<label>EMAIL KARYAWAN</label>
			<input type="text" name="email" value="<?= $data['email'] ?>">
		</div>
		<input type="submit" name="simpan" value="Simpan">
	</form>
</body>
</html>