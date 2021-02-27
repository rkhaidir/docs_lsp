<!DOCTYPE html>

<html lang="en">
<head>
    <title>Program Pencarian Hari</title>
    <style>
        table {
            border: 1px solid black;
        }

        tr, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>List Nama Hari</h1>
    
    
    <?php
    $days = ["SENIN", "SELASA", "RABU", "KAMIS", "JUM'AT", "SABTU", "MINGGU"];
    ?>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Hari</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach($days as $value) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $value; ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <h3>Cari Nama Hari Berdasarkan Nomor Urut</h3>
    <form action="" method="POST">
        <input type="text" name="nomor" size="20">
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php

    if(isset($_POST['submit'])) {
        $no = (int) $_POST['nomor'];
        $n = count($days);
        for ($i=1; $i<=$n; $i++) {
            if ($i == $no) {
                echo "Hari ". $days[$i-1];
            }
        }

        if($no <= 0 || $no > $n) {
            echo "salah";
        }
    }
    
    ?>
</body>
</html