<?php
// masukkan file ModelKaryawan.php
require_once 'model/ModelKaryawan.php';
$karyawan = new ModelKaryawan();

if(isset($_POST['simpan'])) {
	$karyawan->tambahData($_POST['id_karyawan'], $_POST['nama'], $_POST['alamat'], $_POST['email']);

	header('Location: index.php');
}