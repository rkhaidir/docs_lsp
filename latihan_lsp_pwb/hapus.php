<?php

require_once 'koneksi.php';

$query = mysqli_query($con, "DELETE FROM tb_karyawan WHERE id_karyawan = $_GET[id]");

if($query) 
{
	echo "<script>alert('Data Berhasil Dihapus');window.location='index.php'; </script>";
}
else
{
	echo "<script>alert('Data Gagal Dihapus');window.location='index.php'; </script>";
}