<?php

    $buah = ['mangga','semangka','jeruk','apel','anggur']; 

    $buah[1] = 'belimbing';

    echo $buah[1];
    echo "<br>";
    echo $buah[3];  


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php
        $no = 1;
        foreach($buah as $nama_buah){?>
            <li><?php echo $no++?></li>
            <li><?=$nama_buah?></li>
        <?php }?>
    
    </ul>
</body>
</html>