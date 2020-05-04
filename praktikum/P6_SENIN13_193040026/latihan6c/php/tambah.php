<?php
    require 'functions.php';
    if(isset($_POST['tambah']))
    {
        if (tambah($_POST) > 0) {
            echo "<script>
                    alert('Data berhasil ditambahkan!');
                    document.location.href = 'admin.php';
                </script>";
        }
        else {
            echo "<script>
                    alert('Data gagal ditambahkan!');
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
    <h3>form tambah data mahasiswa</h3>
    <form action="" method="post">
        <ul>
            <li>
                <label for="gambar">gambar :</label><br>
                <input type="text" name="gamar" id="gambar" required ><br><br>
            </li>
            <li>
                <label for="nama">Nama :</label><br>
                <input type="text" name="nama" id="nama" required><br><br>
            </li>
            <li>
                <label for="chipset">chipset :</label><br>
                <input type="text" name="chipset" id="chipset" required><br><br>
            </li>
            <li>
                <label for="internal">internal :</label><br>
                <input type="text" name="internal" id="internal" required><br><br>
            </li>
            <li>
                <label for="camera">camera :</label><br>
                <input type="text" name="camera" id="camera" required><br><br>
            </li>
            <li>
                <label for="sensor">sensor :</label><br>
                <input type="text" name="sensor" id="sensor" required><br><br>
            </li>
            <br>
            <button type="submit" name="tambah">tambah data!</button>
            <button type="submit">
                <a href="index.php" style="text-decoration: none; color: black;">kembali</a>
            </button>
        </ul>
    </form>
</body>
</html>