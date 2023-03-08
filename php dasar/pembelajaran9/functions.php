<?php 

function fconn() {
    $conn = mysqli_connect("localhost","root","","PHP_learning");
    return $conn;
}


$conn = mysqli_connect("localhost","root","","PHP_learning");



// data untuk mysql2
function query ($query) {
    global $conn;
    $result = mysqli_query($conn , $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row; 
    }

    return $rows;
}


// data tambah

function tambah($data) {
    // DATA GLOBAL
    global $conn;
    // MENGUBAH DATA YANG DI INPUT MENJADI VARIABLE

    // htmlspesialchars memiliki kegunaan untuk membuat script html menjadi tulisan biasa
    $nama = htmlspecialchars($data["nama"]);
    $karya = htmlspecialchars($data["karya"]);
    $umur = htmlspecialchars($data["umur"]);
    $status = htmlspecialchars($data["status"]);
    $prodi = htmlspecialchars($data["prodi"]);

    // SYNTAX DATABASE YANG DI GUNAKAN
    $query = "INSERT INTO biodata VALUES ('','$nama','$karya','$umur','$status','$prodi')";
    mysqli_query($conn, $query);

    // $checked = mysqli_affected_rows($conn);

    return mysqli_affected_rows($conn);
} 

// delete data

function hapus ($id) {
    global $conn;

    $query = "DELETE FROM biodata WHERE id = $id";
    mysqli_query($conn, $query );

    return mysqli_affected_rows($conn);
}


// update data 

function update ($data) {
    // DATA GLOBAL
    global $conn;
    // MENGUBAH DATA YANG DI INPUT MENJADI VARIABLE
    
    // htmlspesialchars memiliki kegunaan untuk membuat script htmlmenjadi tulisan biasa
    $id = ($data['ID']);
    $nama = htmlspecialchars($data["nama"]);
    $karya = htmlspecialchars($data["karya"]);
    $umur = htmlspecialchars($data["umur"]);
    $status = htmlspecialchars($data["status"]);
    $prodi = htmlspecialchars($data["prodi"]);
    
    // SYNTAX DATABASE YANG DI GUNAKAN
    $query = "UPDATE biodata SET nama = '$nama', karya = '$karya', umur = $umur', status = '$status' , prodi = '$prodi' WHERE id = $id ";
    mysqli_query($conn, $query);
    
    // $checked = mysqli_affected_rows($conn);
    
    return mysqli_affected_rows($conn);
}

function search($data) {
    $query = "SELECT * FROM biodata WHERE nama LIKE '%$data%' OR umur LIKE '%$data%' OR prodi LIKE '%$data%'";

    return query($query);
}


?>



