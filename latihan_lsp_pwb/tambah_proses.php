<?php
require_once 'koneksi.php';
if(isset($_POST['simpan'])) 
{
	$id 		= $_POST['id_karyawan'];
	$name 		= $_POST['nama'];
	$address 	= $_POST['address'];
	$email 		= $_POST['email'];

	$query = mysqli_query($con, "INSERT INTO tb_karyawan SET 
		id_karyawan = '$id',
		nama 		= '$name',
		alamat		= '$address',
		email 		= '$email'
	");

	if($query) 
	{
		header('Location: index.php');
	}
	else
	{
		echo "<script> alert('Data Gagal Diinput') </script>";
		header('Location: tambah.php');
	}
}