<?php
if(isset($_GET['id'])) {
    require __DIR__.'/../app/models/Karyawan.php';
    $karyawan = new Karyawan();
    $karyawan->delete($_GET['id']);
}
header('Location: index.php');