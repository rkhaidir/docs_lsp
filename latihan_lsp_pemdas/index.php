<?php
// membuat variabel bertipe array untuk menyimpan data bulan
$bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"]; 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Daftar Nama Bulan</h1>

	<!-- Buat Table Untuk Menampilkan nama bulan -->
	<table border="1">
		<!-- Table Row [baris] -->
		<tr>
			<!-- [th]Table Head, [td]Table Data [Kolom] -->
			<th>No</th>
			<th>Bulan</th>
		</tr>
		<?php
		// Untuk penomoran bulan
		$nomor=1;
		// Perulangan untuk menampilkan nama-nama bulan
		foreach ($bulan as $tampilBulan) {
			echo "
				<tr>
					<td>$nomor</td>
					<td>$tampilBulan</td>
				</tr>
			";
			$nomor++;
		}
		?>
	</table>
	<br>
	<!-- Buat Untuk pencarian -->
	<form action="" method="POST">
		<input type="text" name="nomor">
		<input type="submit" name="cek" value="Submit">
	</form>

	<!-- Buat action ketika inputan text diisi dan tombol ditekan dari form di atas -->
	<?php

	if(isset($_POST['cek']))
	{
		if($_POST['nomor'] == 1)
		{
			echo "Bulan $bulan[0]";
		}

		elseif($_POST['nomor'] == 2)
		{
			echo "Bulan $bulan[1]";
		}

		elseif($_POST['nomor'] == 3)
		{
			echo "Bulan $bulan[2]";
		}

		elseif($_POST['nomor'] == 4)
		{
			echo "Bulan $bulan[3]";
		}

		elseif($_POST['nomor'] == 5)
		{
			echo "Bulan $bulan[4]";
		}

		elseif($_POST['nomor'] == 6)
		{
			echo "Bulan $bulan[5]";
		}

		elseif($_POST['nomor'] == 7)
		{
			echo "Bulan $bulan[6]";
		}

		elseif($_POST['nomor'] == 8)
		{
			echo "Bulan $bulan[7]";
		}

		elseif($_POST['nomor'] == 9)
		{
			echo "Bulan $bulan[8]";
		}

		elseif($_POST['nomor'] == 10)
		{
			echo "Bulan $bulan[9]";
		}

		elseif($_POST['nomor'] == 11)
		{
			echo "Bulan $bulan[10]";
		}

		elseif($_POST['nomor'] == 12)
		{
			echo "Bulan $bulan[11]";
		}

		else
		{
			echo "Angka yang anda inputkan tidak ada di dalam bulan";
		}
	}
	?>
</body>
</html>