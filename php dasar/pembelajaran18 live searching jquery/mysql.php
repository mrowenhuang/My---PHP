<?php 

// koneksi ke database

$conn = mysqli_connect("localhost","root","","PHP_learning");

// ambil data dari database
$result = mysqli_query($conn , "select * from biodata");
// var_dump($result);
// if (!$result) {
//     echo mysqli_error($conn);
// }

// jenis jenis fetch/ mengambil data dari table
// mysqli_fetch_row(result dari query)
// var_dump(var dari fetc[angka])
// mysqli_fetch_assoc(result dari query)
// var_dump(var dari fetc[Nama data])
// mysqli_fetch_array(result dari query)
// var_dump(var dari fetc[bisa angka bisa nama data])
// mysqli_fetch_object(result dari query)
// var_dump(var dari fetc -> nama data)

// while ($bio = mysqli_fetch_assoc($result)) {
//     var_dump($bio["Nama"]);
// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mysql</title>

    <style>
        .image {
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
    
<h1>Admin Page</h1>

<table border="1" cellpadding="10" cellspacing="2">
    <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>karya</th>
        <th>Edit</th>
        <th>Umur</th>
        <th>Status</th>
        <th>Prodi</th>
    </tr>

    <?php $i = 1; ?>
    <?php while ($bio = mysqli_fetch_assoc($result)) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td><?= $bio ["NAMA"]; ?></td>
        <td><img src="<?= $bio["KARYA"];?>" alt="" class="image"></td>
        <td>
            <a href="">Edit |</a>
            <a href="">Dellete</a>
        </td>
        <td><?php echo $bio["UMUR"]; ?></td>
        <td><?php echo $bio["STATUS"]; ?></td>
        <td><?php echo $bio["Prodi"]; ?></td>

    </tr>
    <?php $i++ ; ?>
    <?php endwhile; ?>

</table>


</body>
</html>