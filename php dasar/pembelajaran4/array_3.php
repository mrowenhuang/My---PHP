<?php

$biodatas = [
    ["owen",17,"medan","mahasiswa","Teknik_Informatika"],
    ["huang",17,"medan","mahasiswa","Teknik_Informatika"],
    ["rich",17,"medan","mahasiswa","Teknik_Informatika"]
];

$biodata = [[1,2,3],[4,5,6],[7,8,9]];

$deskripsi = ["nama : ","umur : ","status : ","prodi : "]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array biodata</title>
</head>
<body>

    <h1>Welcome</h1>

    <?php foreach($biodata as $bios) : ?> 
    <ul>
        <?php foreach($bios as $bio) :?>
            <li><?= $bio; ?></li>
        <?php endforeach;?>
    </ul>
    <?php endforeach;?>
    
</body>
</html>