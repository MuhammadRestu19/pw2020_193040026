<?php
    require 'functions.php';

    if (isset($_GET['cari'])){
        $keyboard = $_GET['keyboard'];
        $elektronik = query("SELECT * FROM elektronik WHERE
                    nama LIKE '%$keyboard%' OR
                    chipset LIKE '%$keyboard%' OR
                    internal LIKE '%$keyboard%' OR
                    camera LIKE '%$keyboard%' OR
                    sensor LIKE '%$keyboard%' OR
        ");
    }else{
        $elektronik =  query("SELECT * FROM elektronik");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="add">
        <a href="tambah.php">tambah data</a>
    </div>
    <form action="" method="get">
        <input type="text" name="keyboard" autofocus>
        <button type="submit" name="cari">cari!</button>
    </form>
    <table border="1" cellpadding="13" cellspacing="0">
    <?php if (empty($elektronik)):?>
    <tr>
        <td colspan="7">
            <h1>data tidak ditemukan</h1>
        </td>
    </tr>
<?php else :?>
    <?php $i = 1;?>
    <?php foreach ($elektronik as $elektronik):?>
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
        <tr>
            <td><?= $i; ?></td>
            <td>
                <div class="update"><a href="ubah.php?id=<?=$elektronik['id']?>"><button>ubah</button></a></div>
                <div class="delete"><a href="hapus.php?id=<?=$elektronik['id']?>"onclick="return confirm('hapus data??')"><button>hapus</button></a></div>

            </td>
            <td><img src="../assets/img/<?=$elektronik['gambar'];?>" alt=""></td>
            <td><?=$elektronik['nama'];?></td>
            <td><?=$elektronik['chipset'];?></td>
            <td><?=$elektronik['internal'];?></td>
            <td><?=$elektronik['camera'];?></td>
            <td><?=$elektronik['sensor'];?></td>
        </tr>
        <?php $i++;?>
    <?php endforeach;?>
    <?php endif;?>

    </table>
</body>
</html>