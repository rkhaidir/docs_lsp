<?php 
// masukkan file ModelKaryawan.php
require_once 'model/ModelKaryawan.php';
$karyawan = new ModelKaryawan();

if(isset($_POST['simpan'])) {
	$eksekusi = $karyawan->simpan_data_edit($_POST['id_karyawan'], $_POST['nama'], $_POST['alamat'], $_POST['email']);

	if($eksekusi) 
	{
		echo "<script>alert('Data Berhasil Diinput');window.location='index.php'; </script>";
	}
	else
	{
		echo "<script>alert('Data Gagal Diinput');window.location='edit.php?id=$_POST[id]'; </script>";
	}
}