<?php
// Bagian Pertama yang harus ditulis
// inculede, include_once, reuqire, require_once
require_once 'koneksi.php';
$query = mysqli_query($con, "SELECT * FROM tb_karyawan");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Karyawan</title>
</head>
<body>
	<h1>DATA KARYAWAN</h1>
	<a href="tambah.php">Tambah Karyawan</a>
	<table border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>Id Karyawan</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Email</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no=1;
			while($data = mysqli_fetch_array($query)) {
				echo "
				<tr>
					<td>$no</td>
					<td>$data[id_karyawan]</td>
					<td>$data[nama]</td>
					<td>$data[alamat]</td>
					<td>$data[email]</td>
					<td>
						<a href='edit.php?id=$data[id_karyawan]'>Edit</a>
						<a href='hapus.php?id=$data[id_karyawan]'>Hapus</a>
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