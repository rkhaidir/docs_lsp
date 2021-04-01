<?php 

// masukkan file ModelKaryawan.php
require_once 'model/ModelKaryawan.php';
$karyawan = new ModelKaryawan();

$karyawan->hapus_data($_GET['id']);
header('Location: index.php');