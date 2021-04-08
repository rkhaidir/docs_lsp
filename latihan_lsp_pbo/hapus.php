<?php 

// masukkan file ModelKaryawan.php
require_once 'model/ModelKaryawan.php';
$karyawan = new ModelKaryawan();

$eksekusi = $karyawan->hapus_data($_GET['id']);

if($eksekusi) 
{
	echo "<script>alert('Data Berhasil Diinput');window.location='index.php'; </script>";
}
else
{
	echo "<script>alert('Data Gagal Diinput');window.location='index.php'; </script>";
}