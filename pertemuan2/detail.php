<?php
require_once('server.php');

$id = $_GET['id'];

$siswa = $db->fetch("SELECT * FROM siswa WHERE id='$id'");
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
    <h1>Detail Siswa</h1>
        <ul>
            <li>NIS : <?= $siswa['nis']; ?></li>
            <li>Nama : <?= $siswa['nama']; ?></li>
            <li>Kelas : <?= $siswa['kelas']; ?></li>
            <li>Absen : <?= $siswa['absen']; ?></li>
        </ul>
    </table>
</body>
</html>