<?php
    require 'php/functions.php';
    $elektronik = query("SELECT * FROM elektronik");

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
        <?php foreach($elektronik as $elk):?>
           <tr>
               <td><?= $i ?></td>
               <td><?= $elk["nama"]?></td>
               <td><?= $elk["chipset"]?></td>
               <td><?= $elk["internal"]?></td>
               <td><?= $elk["camera"]?></td>
               <td><?= $elk["sensor"]?></td>
               <td><img src="assets/img/<?=$elk ["gambar"];?>"></td>
           </tr>
           <?php $i++?>
        <?php endforeach;?>
       </table>
   </div>
</body>
</html>