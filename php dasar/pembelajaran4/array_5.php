<?php

$biodata = [
    ["owen",17,"medan","mahasiswa","Teknik_Informatika"],
    ["huang",17,"medan","mahasiswa","Teknik_Informatika"],
    ["rich",17,"medan","mahasiswa","Teknik_Informatika"]
];

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
<!-- membuka bungkusan array pertama dan di ganti dengan nama bios -->
    <?php foreach($biodata as $bios) : ?> 
    <ul>
        <!-- membaca bungkusan kedua yang berisi data array yang di minta -->
        <li>nama<?php echo $bios[0]; ?></li>
        <li>umur<?php echo $bios[1]; ?></li>
        <li>alamat<?php echo $bios[2]; ?></li>
        <li>status<?php echo $bios[3]; ?></li>
        <li>prodi<?php echo $bios[4]; ?></li>

    </ul>
    <?php endforeach;?>
    
</body>
</html>