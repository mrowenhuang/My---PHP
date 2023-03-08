<?php

$biodata = [
    [
        "nama" => "Owen",
        "umur" => 17,
        "alamat" => "medan",
        "status" => "mahasiswa",
        "prodi" => "teknik Informatika"
    ],

    [
        "nama" => "rudi",
        "umur" => 17,
        "alamat" => "medan",
        "status" => "mahasiswa",
        "prodi" => "teknik Informatika",
        "gambar" => "gambar1.jpg"
    ],

    [
        "nama" => "susan",
        "umur" => 17,
        "alamat" => "medan",
        "status" => "mahasiswa",
        "prodi" => "teknik Informatika",
        "gambar" => "gambar2.jpg"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array biodata</title>

    <style>
        .gambar{
            width: 200px;
            height: 200px;
        }
    </style>
</head>
<body>

    <h1>Welcome</h1>
<!-- membuka bungkusan array pertama dan di ganti dengan nama bios -->
    <?php foreach($biodata as $bios) : ?> 
    <ul>
        <!-- membaca bungkusan kedua yang berisi data array yang di minta -->
        <li><img src= <?php echo $bios["gambar"] ?> alt="" class="gambar"></li>
        <li>nama <?php echo $bios["nama"]; ?></li>
        <li>umur <?php echo $bios["umur"]; ?></li>
        <li>alamat <?php echo $bios["alamat"]; ?></li>
        <li>status <?php echo $bios["status"]; ?></li>
        <li>prodi <?php echo $bios["prodi"]; ?></li>

    </ul>
    <?php endforeach;?>
    
</body>
</html>

