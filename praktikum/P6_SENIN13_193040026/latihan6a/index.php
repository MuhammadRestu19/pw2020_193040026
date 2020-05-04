<?php
    require 'functions.php';
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
        <?php foreach($elektronik as $elk):?>
            <p class="nama">
                <a href="php/admin.php?id=<?= $elk['id']?>">
                    <?= $elk["nama"]?>
                </a>
            </p>
        <?php endforeach;?>
   </div>
</body>
</html>