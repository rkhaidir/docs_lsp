<!DOCTYPE html>
<html>
<head>
    <title>Tambah Karyawan</title>
</head>
<body>
    <h1>Isikan Data Karyawan</h1>
    <form action="create_prosess.php" method="POST">
        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" name="nama" size="30">
        </div>

        <div class="form-group">
            <label for="">Jenis Kelamin</label>
            <input type="radio" name="jk" value="L"> Laki-laki
            <input type="radio" name="jk" value="P"> Perempuan
        </div>

        <div class="form-group">
            <label for="">Alamat</label>
            <textarea name="alamat" cols="30" rows="5"></textarea>
        </div>

        <div class="form-group">
            <label for="">Umur</label>
            <input type="number" name="umur" size="30">
        </div>

        <div class="form-group">
            <label for="">Jabatan</label>
            <select name="jabatan">
                <option>----</option>
                <option value="Manager">Manager</option>
                <option value="HRD">HRD</option>
                <option value="Karyawan">Karyawan</option>
            </select>
        </div>
        
        <div class="form-group">
            <input type="submit" name="simpan" value="Simpan">
        </div>
    </form>
</body>
</html>