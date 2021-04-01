<!DOCTYPE html>
<html>
<head>
	<title>PT SMK BANJARMASIN</title>
</head>
<body>
	<header style="text-align: center">
		<img src="img/SMK-Bisa.png" width="30%">
		<h1>PT SMK BANJARMASIN</h1>
		<h2>Data Karyawan</h2>
	</header>

	<a href="tambah.php">Tambah Karyawan</a>
	<table border="1" style="margin: auto">
		<thead>
			<tr>
				<th>No</th>
				<th>ID Karyawan</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Email</th>
				<th>Ket</th>
			</tr>
		</thead>
		<tbody>
			<?php
			// memasukkan file model karyawan
			require_once 'model/ModelKaryawan.php';

			// membuat object $karyawan
			$karyawan = new ModelKaryawan();
			$no = 1;
			$data = $karyawan->tampilData();
			while ($tampilData = mysqli_fetch_array($data)) {
				echo "
					<tr>
						<td>$no</td>
						<td>$tampilData[id_karyawan]</td>
						<td>$tampilData[nama]</td>
						<td>$tampilData[alamat]</td>
						<td>$tampilData[email]</td>
						<td>
							<a href='edit.php?id=$tampilData[id_karyawan]'>Edit</a>
							<a href='hapus.php?id=$tampilData[id_karyawan]'>Hapus</a>
						</td>
					</tr>
				";
				$no++;
			}
			?>
		</tbody>
	</table>
</body>
</html>