<?php
if(isset($_POST['submit'])) {
    require __DIR__.'/../app/models/Karyawan.php';
    $karyawan = new Karyawan();
    $karyawan->insert(
        [
            'nama'      => $_POST['nama'],
            'jk'        => $_POST['jk'],
            'alamat'    => $_POST['alamat'],
            'umur'      => $_POST['umur'],
            'jabatan'   => $_POST['jabatan']
        ]
    );
}
header('Location: index.php');