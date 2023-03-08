<?php

$nilai = [4,5,6,7,45,65,43,32];

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
    
<?php for ($i=0; $i< count($nilai); $i++) : ?>
    <div class="kotak"><?php print_r($nilai[$i]); ?></div>
<?php  endfor;?>

<div class="clear"></div>
<!-- mengeluarkan nilai array 1/1 dengan foreach -->

<?php foreach($nilai as $n) { ?>
    <div class="kotak"><?php echo $n;?></div>
<?php }?>


</body>
</html>


