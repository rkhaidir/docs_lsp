<?php
require __DIR__.'/../app/models/karyawan.php';
$karyawan = new Karyawan();
$karyawan = $karyawan->getById($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UBAH Karyawan</title>
</head>
<body>
    <h1>UBAH DATA KARYAWAN</h1>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $karyawan->id ?>">
        <div class="form-group">
            <label for="">Nama :</label>
            <input type="text" name="nama" size="30" value="<?= $karyawan->nama ?>">
        </div>
        <div class="form-group">
            <label for="">Jenis Kelamin : </label>
            <label for="">
                <input type="radio" name="jk" value="L" <?= $karyawan->jk == 'L' ? 'checked': ''; ?>> Laki-laki
            </label>
            <label for="">
                <input type="radio" name="jk" value="P" <?= $karyawan->jk == 'P' ? 'checked': ''; ?>> Perempuan
            </label>
        </div>
        <div class="form-group">
            <label for="">Alamat : </label>
            <textarea name="alamat" cols="30" rows="5"><?= $karyawan->alamat ?></textarea>
        </div>
        <div class="form-group">
            <label for="">Umur</label>
            <input type="number" name="umur" value="<?= $karyawan->umur ?>">
        </div>
        <div class="form-group">
            <label for="">Jabatan</label>
            <input type="text" name="jabatan" value="<?= $karyawan->jabatan ?>">
        </div>
        <input type="submit" name="submit" value="Simpan">
    </form>
</body>
</html>