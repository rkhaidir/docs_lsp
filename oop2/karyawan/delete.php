<?php
if(isset($_GET['id'])) {
    require __DIR__.'/../app/models/Karyawan.php';
    $karyawan = new Karyawan();
    $karyawan->hapus_karyawan($_GET['id']);
}
header('Location: index.php');