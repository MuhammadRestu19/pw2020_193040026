<?php
    require 'functions.php';

    $id = $_GET['id'];
    $elektronik = query("SELECT * FROM elektronik WHERE id = $id")[0];
    if(isset($_POST['ubah']))
    {
        if (tambah($_POST) > 0) {
            echo "<script>
                    alert('Data berhasil diubah!');
                    document.location.href = 'admin.php';
                </script>";
        }
        else {
            echo "<script>
                    alert('Data gagal diubah!');
                    document.location.href = 'admin.php';
                </script>";
        }
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
    <h3>form ubah data elektronik</h3>
    <form action="" method="post">
        <ul>
            <li>
                <input type="hidden" name="id" id="id" value="<?=$elektronik['id'];?>">
            </li>
            <li>
                <label for="gambar">gambar :</label><br>
                <input type="text" name="gamar" id="gambar" required value="<?=$elektronik['gambar'];?>"><br><br>
            </li>
            <li>
                <label for="nama">Nama :</label><br>
                <input type="text" name="nama" id="nama" required value="<?=$elektronik['nama'];?>"><br><br>
            </li>
            <li>
                <label for="chipset">chipset :</label><br>
                <input type="text" name="chipset" id="chipset" required value="<?=$elektronik['chipset'];?>"><br><br>
            </li>
            <li>
                <label for="internal">internal :</label><br>
                <input type="text" name="internal" id="internal" required value="<?=$elektronik['internal'];?>"><br><br>
            </li>
            <li>
                <label for="camera">camera :</label><br>
                <input type="text" name="camera" id="camera" required value="<?=$elektronik['camera'];?>"><br><br>
            </li>
            <li>
                <label for="sensor">sensor :</label><br>
                <input type="text" name="sensor" id="sensor" required value="<?=$elektronik['sensor'];?>"><br><br>
            </li>
            <br>
            <button type="submit" name="ubah">ubah data!</button>
            <button type="submit">
                <a href="index.php" style="text-decoration: none; color: black;">kembali</a>
            </button>
        </ul>
    </form>
</body>
</html>