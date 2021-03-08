<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
    <style>
        .header {
            margin-bottom: 25px;
            text-align: center;
        }
        table {
            border: 1px solid black;
        }
        tr, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>PT KREATIF BANJARMASIN</h1>
        <h2>DATA KARYAWAN</h2>
    </div>
    
    <a href="create.php">Tambah Karyawan</a>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
            require __DIR__.'/../app/models/Karyawan.php';
            $karyawan = new Karyawan();
            $no = 1;
            foreach($karyawan->tampil_karyawan() as $data):
        ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $data->nama ?></td>
                <td><?= ($data->jk == 'L') ? "Laki-laki" : "Perempuan"; ?></td>
                <td><?= $data->alamat ?></td>
                <td><?= $data->email ?></td>
                <td>
                    <a href="edit.php?id=<?= $data->id ?>">Edit</a> |
                    <a href="delete.php?id=<?= $data->id ?>">Hapus</a> |
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>