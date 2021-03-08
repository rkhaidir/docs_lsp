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
    <h1>Daftar Nama Hari</h1>
    
    
    <?php
    $days = ["SENIN", "SELASA", "RABU", "KAMIS", "JUM'AT", "SABTU", "MINGGU"];
	$sort = sort($days);
	echo $sort;
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
            foreach($sort as $value) {
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
        <input type="text" name="number" size="20">
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php

    if(isset($_POST['submit'])) {
        $number = (int) $_POST['number'];
        $n = count($days);
        for ($i=1; $i<=$n; $i++) {
            if ($i == $number) {
                echo "Hari ". $days[$i-1];
            }
        }

        if($number <= 0 || $number >= $n) {
            echo "Angka yang anda inputkan tidak ada";
        }
    }
    
    ?>
</body>
</html