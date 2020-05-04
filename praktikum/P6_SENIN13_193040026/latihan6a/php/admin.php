<?php
    require 'functions.php';
    $elektronik = query("SELECT * FROM elektronik");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="13" cellspacing="0">
        <tr>
            <th>#</th>
            <th>opsi</th>
            <th>gambar</th>
            <th>nama</th>
            <th>chipset</th>
            <th>internal</th>
            <th>camera</th>
            <th>sensor</th>
        </tr>
        <?php $i = 1;?>
        <?php foreach ($elektronik as $elektronik):?>
            <tr>
                <td><?= $i;?></td>
                <td>
                    <a href=""><button>ubah</button></a>
                    <a href=""><button>hapus</button></a>
                </td>
                <td><img src="../assets/img/<?= $elektronik['gambar'];?>" alt=""></td>
                <td><?= $elektronik['nama']; ?></td>
                <td><?= $elektronik['chipset']; ?></td>
                <td><?= $elektronik['internal']; ?></td>
                <td><?= $elektronik['camera']; ?></td>
                <td><?= $elektronik['sensor']; ?></td>
            </tr>
            <?php $i++;?>
        <?php endforeach;?>
    </table>
    
</body>
</html>