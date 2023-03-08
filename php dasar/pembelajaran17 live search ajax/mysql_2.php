<?php 
// session start
session_start();

// perintah bila session tidak ada maka akan langsung di arahkan kembali
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
}


// koneksi ke database
require "functions.php";

// ambil data dari database
$biodata = query("select * from biodata");

if (isset ($_POST['search'])) {
    # code...
    $biodata = search($_POST['pencarian']);
}


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

<!-- log out -->
<a href="logout.php"><b><i style="color: red;">Log Out</i></b></a>

<!-- tambah data -->
<br>
<a href="form2.php"><h3>+ Tambah Data +</h3></a>
<br>

<!-- pencarian -->
<form action="" method="POST">
        <input type="text" name="pencarian" size="40" autocomplete="off" autofocus placeholder="Input Keyword" id="pencarian">
        <button name="search" id="tombol-pencarian">Search</button>
</form>

<br>
<br>

<div id="container">
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
    <?php foreach ($biodata as $bio) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td><?php echo $bio ["NAMA"]; ?></td>
        <td><img src="img/<?= $bio["KARYA"]; ?>" alt="" class="image"></td>
        <td>
            <a href="edit.php?ids=<?= $bio['ID']; ?>">Edit |</a>
            <a href="delete.php?id=<?= $bio['ID']; ?>" onclick="return confirm('Make sure you want to delete the true data')">Delete</a>
        </td>
        <td><?php echo $bio["UMUR"]; ?></td>
        <td><?php echo $bio["STATUS"]; ?></td>
        <td><?php echo $bio["Prodi"]; ?></td>

    </tr>
    <?php $i++ ; ?>
    <?php endforeach; ?>

</table>
</div>

<script src="js/ajax.js"></script>

</body>
</html>