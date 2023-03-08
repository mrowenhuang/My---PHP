 <?php 
// session start
session_start();

// perintah bila session tidak ada maka akan langsung di arahkan kembali
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
}


// koneksi ke database
require "functions.php";

// pagination
// konfigurasi

// memenentukan jumlah data yang kita ingin munculkan
$JumlahDataPerHalaman = 3;
// menghitung jumlah table yang ada pada database biodata
$JumlahData = count(query("SELECT * FROM biodata"));
// menghitung jumlah halaman yang akan muncul dari hasil pembagian antara jumlahdata dan jumlahperhalaman dengan syarat jika ingin memnculkan halaman harus di bulatkan ke atas
$JumlahHalaman = ceil($JumlahData/$JumlahDataPerHalaman);

// Halaman yang aktif dengan menggunkan if dan else 
// if (isset($_GET['halaman'])) {
//     $HalamanAktif = $_GET['halaman'];
// } else {
//     $HalamanAktif = 1;
// }

// menggunakan operator ternary
$HalamanAktif = (isset ($_GET['halaman'])) ? $_GET['halaman'] : 1;

// Mencari nilai awal data
$AwalData = ($JumlahDataPerHalaman * $HalamanAktif) - $JumlahDataPerHalaman;

// ambil data dari database dan membuat limit 
$biodata = query("SELECT * FROM biodata LIMIT $AwalData,$JumlahDataPerHalaman");

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
        <input type="text" name="pencarian" size="40" autocomplete="off" autofocus placeholder="Input Keyword">
        <button name="search" >Search</button>
</form>
<br>
<br>


<!-- membuat navigasi dengan nomor -->
<!-- membuat tanda panah $gt(>) &lt(<) &laquo(<) &raquo;(>) -->

<!-- bermakna bila pada halaman aktif besar dari 1 maka munculkan link dan &laquo(<) jika tidak jangan munculkan apapun dan jalankan program di bawah nya -->
<?php if($HalamanAktif >  1) :?>
    <a href="?halaman=<?=$HalamanAktif - 1;?>">&laquo;</a>
<?php endif; ?>

<!-- untuk nilai i yang lebih kecil sama dengan dari jumlah halaman maka munculkan sebanyak jumlah halaman -->
<?php for ($i=1; $i <= $JumlahHalaman; $i++) :?>
    <!-- jika nilai i samadengan nilai halaman aktif munculkan link halaman dengan font weight bold dan warna merah -->
    <?php if ($i == $HalamanAktif) :?>
        <a href="?halaman=<?= $i ?>" style="font-weight: bold; color: red; "><?= $i ?></a>
    <!-- atau munculkan nilai halaman tanpa apapun -->
    <?php else : ?>
        <a href="?halaman=<?= $i ?>"><?= $i ?></a>
    <?php endif; ?>

<?php endfor; ?>

<!-- jika nilai pada halaman aktif lebih kecil dari jumlah halaman maka munculkan link dan &raquo;(>) jika tidak maka lanjutkan program lainnya -->
<?php if($HalamanAktif < $JumlahHalaman ) :?>
    <a href="?halaman=<?=$HalamanAktif + 1;?>">&raquo;</a>
<?php endif; ?>



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



</body>
</html>