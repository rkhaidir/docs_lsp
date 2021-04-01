<?php

require_once 'koneksi.php';

mysqli_query($con, "DELETE FROM tb_karyawan WHERE id_karyawan = $_GET[id]");

header('Location: index.php');