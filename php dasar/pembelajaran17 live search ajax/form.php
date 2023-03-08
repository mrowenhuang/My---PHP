<?php 
// MELAKUKAN KONEKSI KE DALAM DATA BASE
$conn = mysqli_connect("localhost","root","","PHP_learning");


if (isset ($_POST["submit"])) {
    // MENGUBAH DATA YANG DI INPUT MENJADI VARIABLE
    $nama = $_POST["nama"];
    $karya = $_POST["karya"];
    $umur = $_POST["umur"];
    $status = $_POST["status"];
    $prodi = $_POST["prodi"];

    // MEMASUKAN DATA KE DALAM QUERY AGAR DAPAT DI JALANKAN
    $query = "INSERT INTO biodata VALUES ('','$nama','$karya','$umur','$status','$prodi')";
    mysqli_query($conn, $query);
}

// MENGECEK PROGRAM ERROR ATAU TIDAK

// var_dump(mysqli_affected_rows($conn));

if ( mysqli_affected_rows($conn) > 0 ) {
    # code...
    echo "<h3 style ='color: green; ' >SECCES<h3>";
} else {
    ECHO "FAILED";
    "<br>";
    mysqli_error($conn);
}


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


    <form action="" method="POST">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="karya">karya : </label>
                <input type="text" name="karya" id="karya">
            </li>
            <li>
                <label for="umur">Umur : </label>
                <input type="text" name="umur" id="umur">
            </li>
            <li>
                <label for="status">Status : </label>
                <input type="text" name="status" id="status">
            </li>
            <li>
                <label for="prodi">Prodi : </label>
                <input type="text" name="prodi" id="prodi">
            </li>
            <li>
                <button name="submit" type="submit">Submit</button>
            </li>


        </ul>
    </form>
</body>
</html>