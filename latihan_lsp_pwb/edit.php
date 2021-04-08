<?php
require_once 'koneksi.php';
$query = mysqli_query($con, "SELECT * FROM tb_karyawan WHERE id_karyawan='$_GET[id]'");
$data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Karyawan</title>
</head>
<body>
	<h1>Ubah Data Karyawan</h1>
	<form action="edit_proses.php" method="POST" onsubmit="return konfirmasi()">
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
			<textarea name="address"><?= $data['alamat'] ?></textarea>
		</div>
		<div>
			<label>EMAIL KARYAWAN</label>
			<input type="text" name="email" value="<?= $data['email'] ?>">
		</div>
		<input type="submit" name="simpan" value="Simpan">
	</form>

	<script type="text/javascript">
		function konfirmasi() {
			const konfirmasi = confirm('Apakah data yang anda inputkan sudah benar?');

			if(konfirmasi == true) {
				document.form.submit();
			} else {
				return false;
			}
		}
	</script>
</body>
</html>