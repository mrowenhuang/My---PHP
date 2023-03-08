<?php 
// session start
session_start();

// perintah bila session tidak ada maka akan langsung di arahkan kembali
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
}

// MELAKUKAN KONEKSI KE DALAM DATA BASE
include 'functions.php';


if (isset ($_POST["submit"])) {

    if (tambah ($_POST) > 0)  {
        echo"<script>
                alert('YOUR INPUTED DATA SUCCES');
                document.location.href = 'mysql_2.php';
            </script>";
    } else {
        echo "<h2 style ='color: red; ' >Error<h2>";
        "<br>";
        echo mysqli_error(fconn());
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
    <title>Tambah Data</title>
</head>
<body>

    <h2>Add Data Page</h2>


    <form action="" method="POST" enctype="multipart/form-data">
        <ul>
            <li>
                <!-- required berfungsi untuk membuat inputan menjadi penting dan mesti di isi baru bisa di submit -->
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="karya">karya : </label>
                <input type="file" name="karya" id="karya">
            </li>
            <li>
                <label for="umur">Umur : </label>
                <input type="text" name="umur" id="umur"required>
            </li>
            <li>
                <label for="status">Status : </label>
                <input type="text" name="status" id="status"required>
            </li>
            <li>
                <label for="prodi">Prodi : </label>
                <input type="text" name="prodi" id="prodi"required>
            </li>
            <li>
                <button name="submit" type="submit">Submit</button>
            </li>


        </ul>
    </form>
</body>
</html>