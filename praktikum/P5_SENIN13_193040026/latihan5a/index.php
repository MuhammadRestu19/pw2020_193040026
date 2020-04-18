<?php
   $conn = mysqli_connect("localhost","root","") or die("koneksi ke DB gagal");
   mysqli_select_db($conn,"tubes_193040026") or die("database salah!");
   $result = mysqli_query($conn,"SELECT * FROM elektronik");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tubes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
   <div class="container">
       <table cellpadding="10" cellspacing="0" border="1">
           <tr>
               <th>id</th>
               <th>nama</th>
               <th>chipset</th>
               <th>internal</th>
               <th>camera</th>
               <th>sensor</th>
               <th>gambar</th>
           </tr>
        <?php $i = 1 ?>
        <?php while($row = mysqli_fetch_assoc($result)):?>
           <tr>
               <td><?= $i ?></td>
               <td><?= $row["nama"]?></td>
               <td><?= $row["chipset"]?></td>
               <td><?= $row["internal"]?></td>
               <td><?= $row["camera"]?></td>
               <td><?= $row["sensor"]?></td>
               <td><img src="assets/img/<?=$row["gambar"];?>"></td>
           </tr>
           <?php $i++?>
        <?php endwhile;?>
       </table>
   </div>
</body>
</html>