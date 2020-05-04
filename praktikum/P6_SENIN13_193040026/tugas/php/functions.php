<?php
    function koneksi(){
        $conn = mysqli_connect("localhost","root","")or die("koneksi ke DB gagal");
        mysqli_select_db($conn,"tubes_193040026")or die("database salah");
        return $conn;
    }

    function query($sql){
        $conn=koneksi();
        $result= mysqli_query($conn,"$sql");

        $rows = [];
        while ($row = mysqli_fetch_assoc($result)){
            $rows[]=$row;
        }
        return $rows;
    }
    function tambah($data)
    {
        $conn = koneksi();

        $nama = htmlspecialchars($data['nama']);
        $chipset = htmlspecialchars($data['chipset']);
        $internal = htmlspecialchars($data['internal']);
        $camera = htmlspecialchars($data['camera']);
        $sensor = htmlspecialchars($data['sensor']);
        $gambar = htmlspecialchars($data['gambar']);

        $query = "INSERT INTO elektronik
                            VALUES
                            ('','$nama','$chipset','$internal','$camera','$sensor','$gambar')";
        mysqli_query($conn,$query);

        return mysqli_affected_rows($conn);
    }

    function hapus($id)
    {
        $conn = koneksi();
        mysqli_query($conn,"DELETE FROM elektronik WHERE id = $id");

        return mysqli_affected_rows($conn);
    }
    function ubah($data)
    {
        $conn = koneksi();

        $nama = htmlspecialchars($data['nama']);
        $chipset = htmlspecialchars($data['chipset']);
        $internal = htmlspecialchars($data['internal']);
        $camera = htmlspecialchars($data['camera']);
        $sensor = htmlspecialchars($data['sensor']);
        $gambar = htmlspecialchars($data['gambar']);

        $query = "UPDATE elektronik
                    SET
                    nama = '$nama',
                    chipset = '$chipset',
                    internal = '$internal',
                    camera = '$camera',
                    sensor = '$sensor',
                    gambar = '$gambar'
                    ";

        mysqli_query($conn,$query);

        return mysqli_affected_rows($conn);
    }