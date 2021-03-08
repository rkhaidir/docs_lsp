<?php
// include 'connection.php';
require 'connection.php';

if(isset($_POST['simpan'])) {
    $nama   = $_POST['nama'];
    $jk     = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $umur   = $_POST['umur'];
    $jabatan= $_POST['jabatan'];

    mysqli_query($conn, "INSERT INTO tb_karyawan SET 
        nama  = '$nama',
        jk      = '$jk',
        alamat  = '$alamat',
        umur    = '$umur',
        jabatan = '$jabatan'
    ");
}
header('Location: index.php');