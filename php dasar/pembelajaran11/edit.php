<?php 
// MELAKUKAN KONEKSI KE DALAM DATA BASE
require 'functions.php';

$id = $_GET['ids'];

$bio = query("SELECT * FROM biodata WHERE id = $id")[0];



if (isset ($_POST["submit"])) {

    if (update ($_POST) > 0)  {
        echo"<script>
                alert('YOUR UPDATED DATA SUCCES');
                document.location.href = 'mysql_2.php';
            </script>";
    } else {
        echo"<script>
            alert('YOUR UPDATED DATA FAILED');
            document.location.href = 'mysql_2.php';
        </script>";
    }


}

// MENGECEK PROGRAM ERROR ATAU TIDAK

// var_dump(mysqli_affected_rows($conn));

// if ( mysqli_affected_rows($conn) > 0 ) {
//     # code...
//     echo "<h3 style ='color: green; ' >SECCES<h3>";
// } else {
//     ECHO "FAILED";
//     "<br>";
//     mysqli_error($conn);
// }


// mysqli_affected_rows($conn);
// var_dump(mysqli_affected_rows($conn))
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
</head>
<body>

    <h2>Add Update Page</h2>


    <form action="" method="POST" enctype="multipart/form-data">
        <ul>
                <input type="hidden" name="ID" required value="<?= $bio['ID']?>">
                <input type="hidden" name="karyalama" required value="<?= $bio['KARYA']?>">
            <li>
                <!-- required berfungsi untuk membuat inputan menjadi penting dan mesti di isi baru bisa di submit -->
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required value="<?= $bio['NAMA']?>">
            </li>
            <li>
                <label for="karya">karya : </label>
                <br>
                <img src="img/<?= $bio['KARYA']; ?>" alt="image" width="70px" height="70px">
                <br>
                <input type="file" name="karya" id="karya">
            </li>
            <li>
                <label for="umur">Umur : </label>
                <input type="text" name="umur" id="umur"required value="<?= $bio['UMUR']?>">
            </li>
            <li>
                <label for="status">Status : </label>
                <input type="text" name="status" id="status"required value="<?= $bio['STATUS']?>">
            </li>
            <li>
                <label for="prodi">Prodi : </label>
                <input type="text" name="prodi" id="prodi"required value="<?= $bio['Prodi']?>">
            </li>
            <li>
                <button name="submit" type="submit">UPDATE</button>
            </li>


        </ul>
    </form>
</body>
</html>