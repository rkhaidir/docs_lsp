<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Karyawan</title>
</head>
<body>
    <h1>ISIKAN DATA KARYAWAN</h1>
    <form action="store.php" method="POST">
        <div class="form-group">
            <label for="">Nama :</label>
            <input type="text" name="nama" size="30">
        </div>
        <div class="form-group">
            <label for="">Jenis Kelamin : </label>
            <label for="">
                <input type="radio" name="jk" value="L"> Laki-laki
            </label>
            <label for="">
                <input type="radio" name="jk" value="P"> Perempuan
            </label>
        </div>
        <div class="form-group">
            <label for="">Alamat : </label>
            <textarea name="alamat" cols="30" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label for="">Umur</label>
            <input type="number" name="umur">
        </div>
        <div class="form-group">
            <label for="">Jabatan</label>
            <input type="text" name="jabatan">
        </div>
        <input type="submit" name="submit" value="Simpan">
    </form>
</body>
</html>