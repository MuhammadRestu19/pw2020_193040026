<?php

    if (!isset($_GET['id'])){
        header("location:../index.php");
        exit;
    }

    require 'functions.php';

    $id=$_GET['id'];

    $elektronik = query("SELECT * FROM elektronik WHERE id=$id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tubes</title>
</head>
<body>
    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $elektronik ["gambar"]; ?>">
        </div>
        <div class="keterangan">
            <p><?=$elektronik["nama"]; ?></p>
            <p><?=$elektronik["chipset"]; ?></p>
            <p><?=$elektronik["internal"]; ?></p>
            <p><?=$elektronik["camera"]; ?></p>
            <p><?=$elektronik["sensor"]; ?></p>
        </div>
        <button class="tombol-kembali"><a href="../index.php">kembali</a></button>
    </div>
</body>
</html>