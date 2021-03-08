<?php
if(isset($_POST['submit'])) {
    require __DIR__.'/../app/models/Karyawan.php';
    $karyawan = new Karyawan();
    $karyawan->edit_karyawan(
        $_POST['id'],
        $_POST['nama'], 
        $_POST['jk'], 
        $_POST['alamat'], 
        $_POST['email']
    );
}
header('Location: index.php');