<?php 

$biodata = [
    [
        "nama" => "Owen",
        "umur" => 14,
        "alamat" => "medan",
        "status" => "mahasiswa",
        "prodi" => "teknik Informatika"
    ],

    [
        "nama" => "rudi",
        "umur" => 19,
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
    <title>Document</title>
</head>
<body>
    
    <ul>
    <?php foreach ($biodata as $bio) :?>
        <!-- name merupakan suatu variable yang di isikan data dan dapat dikirim ke bagian link dan di terima dengan $_GET pada link halaman agar menunjukan data -->
        <a href="superglobal2.php?idnama=<?= $bio["nama"]; ?> & umr= <?= $bio["umur"]; ?> &addres= <?= $bio["alamat"];?> & status= <?= $bio["status"];?>& plj= <?= $bio["prodi"];?>">
        <li><?php echo $bio["nama"]; ?></li></a>
    <?php endforeach ; ?>
    </ul>
</body>
</html>