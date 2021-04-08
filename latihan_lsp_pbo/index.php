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
		<br>
		<a href="tambah.php">Tambah Karyawan</a>
	</header>

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
							<a href='hapus.php?id=$tampilData[id_karyawan]' class='hapus' data-id='$tampilData[id_karyawan]'>Hapus</a>
						</td>
					</tr>
				";
				$no++;
			}
			?>
		</tbody>
	</table>

	<script>
		// mengambil semua tombol hapus berdasarkan class hapus
		const hapus = document.querySelectorAll('.hapus');
		
		// melakukan perulangan untuk mencari tombol hapus yang diklik
		for(let i=0; i<hapus.length; i++) {
			hapus[i].addEventListener('click', (event) => {
				// menghentikan event ketika diclik
				event.preventDefault();

				// mengambil nilai attribut href
				const href = hapus[i].getAttribute('href');
				// mengambil nilai attribut data-id
				const id = hapus[i].getAttribute('data-id');

				const konfirmasi = confirm(`Apakah anda yakin ingin menghapus ${id}?`);

				if(konfirmasi == true) {
					document.location.href = href;
				}
			})
		}
	</script>
</body>
</html>