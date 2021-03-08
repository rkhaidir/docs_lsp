<?php
if(isset($_POST['submit'])) {
    require __DIR__.'/../app/models/Karyawan.php';
    $karyawan = new Karyawan();
    $karyawan->tambah_karyawan(
        $_POST['nama'], 
        $_POST['jk'], 
        $_POST['alamat'], 
        $_POST['email']
    );
}
header('Location: index.php');