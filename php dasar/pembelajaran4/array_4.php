<?php

$nilai = [[1,2,3],[4,5,6],[7,8,9]];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak{
            height: 50px;
            width: 50px;
            background-color: green;
            line-height: 50px;
            text-align: center;
            float: left;
            margin: 10px;
        }

        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    

<!-- mengeluarkan nilai array 1/1 dengan foreach -->

<!-- membuka bungkusan array yang pertama dan di baca dengan n -->
    <?php foreach($nilai as $n) { ?>
        <!-- membuka bungkusan array ke dua dan di baca dengan a -->
        <?php foreach($n as $a) : ?>
            <!-- membaca nilai a dengan memunculkan angka 1/1 -->
            <div class="kotak"><?= $a;?></div>
        <?php endforeach; ?>
    <div class="clear"></div>
    <?php }?>

</body>
</html>