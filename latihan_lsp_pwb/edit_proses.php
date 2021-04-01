<?php
require_once 'koneksi.php';
if(isset($_POST['simpan'])) 
{
	$id 		= $_POST['id_karyawan'];
	$name 		= $_POST['nama'];
	$address 	= $_POST['address'];
	$email 		= $_POST['email'];

	$query = mysqli_query($con, "UPDATE tb_karyawan SET 
		nama 		= '$name',
		alamat		= '$address',
		email 		= '$email'
		WHERE id_karyawan = '$id'
	");
	//header('Location: index.php');

	if($query) 
	{
		header('Location: index.php');
		echo "<script> alert('Data Berhasil Diedit') </script>";
	}
	else
	{
		header("Location: edit.php?id=$id");
		echo "<script> alert('Data Gagal Diedit') </script>";
	}
}