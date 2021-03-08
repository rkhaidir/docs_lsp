<!DOCTYPE html>
<html>
<head>
    <title>Data Karyawan</title>
    <style>
        .header {
            text-align: center;
        }
        table, tr, th, td {
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
                <th>Umur</th>
                <th>Jabatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
        require 'connection.php';
        $query = mysqli_query($conn, "SELECT * FROM tb_karyawan");
        $no = 1;
        while($data = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['jk'] ?></td>
            <td><?= $data['alamat'] ?></td>
            <td><?= $data['umur'] ?></td>
            <td><?= $data['jabatan'] ?></td>
            <td>
                <a href="edit.php?id=<?= $data['id'] ?>">Edit</a> |
                <a href="hapus.php?id=<?= $data['id'] ?>">Hapus</a>
            </td>
        </tr>
        <?php } ?>
        </tbody>
    </table>

</body>
</html>