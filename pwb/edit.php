<?php
require 'connection.php';
$query = mysqli_query($conn, "SELECT * FROM tb_karyawan WHERE id = $_GET[id]");
$data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Karyawan</title>
</head>
<body>
    <h1>Isikan Data Karyawan</h1>
    <form action="edit_prosess.php" method="POST">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" name="nama" size="30" value="<?= $data['nama'] ?>">
        </div>

        <div class="form-group">
            <label for="">Jenis Kelamin</label>
            <input type="radio" name="jk" value="L" <?= $data['jk'] == 'L' ? 'checked' : '' ?>> Laki-laki
            <input type="radio" name="jk" value="P"  <?= $data['jk'] == 'P' ? 'checked' : '' ?>> Perempuan
        </div>

        <div class="form-group">
            <label for="">Alamat</label>
            <textarea name="alamat" cols="30" rows="5"><?= $data['alamat'] ?></textarea>
        </div>

        <div class="form-group">
            <label for="">Umur</label>
            <input type="number" name="umur" size="30" value="<?= $data['umur'] ?>">
        </div>

        <div class="form-group">
            <label for="">Jabatan</label>
            <select name="jabatan">
                <option>----</option>
                <option value="Manager" <?= $data['jabatan'] == 'Manager' ? 'Selected' : '' ?>>Manager</option>
                <option value="HRD" <?= $data['jabatan'] == 'HRD' ? 'Selected' : '' ?>>HRD</option>
                <option value="Karyawan" <?= $data['jabatan'] == 'Karyawan' ? 'Selected' : '' ?>>Karyawan</option>
            </select>
        </div>
        
        <div class="form-group">
            <input type="submit" name="simpan" value="Simpan">
        </div>
    </form>
</body>
</html>