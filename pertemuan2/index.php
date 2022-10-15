<?php
require_once('server.php');
$siswa = $db->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Siswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>            
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Absen</th>
            <th>Aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach($siswa as $key => $row) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $row["nis"] ?></td>
            <td><?= $row["nama"] ?></td>
            <td><?= $row["kelas"] ?></td>
            <td><?= $row["absen"] ?></td>
            <td>
                <a href="detail.php?id=<?= $row['id'] ?>">Detail</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
        
    </table>
</body>
</html>