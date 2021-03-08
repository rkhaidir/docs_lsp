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
        .main {
            width: 50%;
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
    
    <div class="main">
        <span>
            <a href="create.php">Tambah Karyawan</a>
        </span>
        <span style="text-align: right">
            <form action="search.php" method="POST">
                <input type="text" name="keyword" size="30">
                <input type="submit" name="search" value="Cari">
            </form>
        </span>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Umur</th>
                    <th>Jabatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
                require __DIR__.'/../app/models/Karyawan.php';
                if(isset($_POST['search'])) {
                    $karyawan = new Karyawan();

                    $keyword = $_POST['keyword'];
                    $no = 1;
                    foreach($karyawan->search($keyword) as $data):
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $data->nama ?></td>
                            <td><?= ($data->jk == 'L') ? "Laki-laki" : "Perempuan"; ?></td>
                            <td><?= $data->alamat ?></td>
                            <td><?= $data->umur ?></td>
                            <td><?= $data->jabatan ?></td>
                            <td>
                                <a href="edit.php?id=<?= $data->id ?>">Edit</a> |
                                <a href="delete.php?id=<?= $data->id ?>">Hapus</a> 
                            </td>
                        </tr>
                    <?php
                        endforeach;
                        }
                    ?>
            </tbody>
        </table>
    </div>
</body>
</html>