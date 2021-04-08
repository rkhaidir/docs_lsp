<?php
// memasukkan file koneksi
require_once 'koneksi.php';

if(isset($_POST['simpan'])) 
{
	// mengambil nilai dari inputan
	$id 		= $_POST['id_karyawan'];
	$name 		= $_POST['nama'];
	$address 	= $_POST['address'];
	$email 		= $_POST['email'];

	// mengeksekusi kueri insert dengan menyimpan data berdasarkan nilai dari inputan
	$query = mysqli_query($con, "INSERT INTO tb_karyawan SET 
		id_karyawan = '$id',
		nama 		= '$name',
		alamat		= '$address',
		email 		= '$email'
	");

	
	if($query) 
	{
		echo "<script>alert('Data Berhasil Diinput');window.location='index.php'; </script>";
	}
	else
	{
		echo "<script>alert('Data Gagal Diinput');window.location='tambah.php'; </script>";
	}
}